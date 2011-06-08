<style>
.label p { padding: 10px; display: inline; }
</style>
<script>
(function () { /* TODO: better ui, separate js from view */

	$(document).ready(function () { /* our namespace */
		RMan.popup = {};

		/* all drinks, fetched from the server */
		var all_drinks = {};

		/* food typeid, for querying */
		var food_type = <?php echo $foo_type ?> ;

		/* GET path */
		var fetch_path = 'online/restaurantAdmin/resGetfoodInfoData/';

		/* UPDATE path */
		var post_path = 'online/restaurantAdmin/resUpdatefoodInfoData/';

		/* DELETE path */
		var del_path = 'online/restaurantAdmin/resDeletefoodInfoData/';

		/* wrapper for all option blocks */
		var wrapper = $('#mu-res-admin-popup-wrapper');
		wrapper.css('width', '720px');

		/* returns a callback function that can create a table of options */
		var item_option_factory = function (item_name, item_dom) {
				var construct_item_options = function (data) { /* get data from server */
						var items_fetched = data[item_name] || {};

						/* the table to display cells */
						var table_dom = $('<table border="0" cellpadding="0" cellspacing="0"></table>');
						item_dom.append(table_dom);

						/* the cells */
						var table_cells = RMan.popup[item_name + '_cells'] = [];

						/* construct one cell */
						var construct_cell = function (name, enabled) {
								var cell_created = $('<span selected="0"><input value="' + name + '"></input></span>');
								var btn = $('<button>供應</button>').button();
								var del_this = $('<button class="mu_iconBtn"><span></span></button>').button({ icons: {primary:'ui-icon-close'}});

								/* toggle selection */
								btn.click(function (e) {
									var par = $($(this).parent());
									var was_enabled = parseInt(par.attr('selected'));
									$(this).toggleClass('mu_active');
									if (was_enabled) {
										$(this).text('供應');
										par.attr('selected', '0');
									} else {
										$(this).text('暫停');
										par.attr('selected', '1');
									}
								});

								del_this.click(function (e) {
									var par = $($(this).parent());
									$.each(table_cells, function (key, val) {
										if ($(val)[0] == par[0]) {
/* got this cell -- delete it
                     and issue a deletion to the server */
											var post_data = {};
											var to_del = post_data[item_name] = {};
											var that_item_name = par.find('input').val();
											to_del[that_item_name] = 1;

											$.post(del_path + String(food_type), {
												delete_data: JSON.stringify(post_data)
											}, function (res) {
												//console.log('deletion succ', res);
											});
											table_cells[key] = null;
										}
									});
									construct_table(); /* after deletion: resize the table */
								});

								cell_created.append(btn);
								cell_created.append(del_this);
								table_cells.push(cell_created);

								if (enabled) /* set enable */
								btn.trigger('click');
							};

						/* called when the table is modified */
						var construct_table = function () { /* note as before $1.6, $.map only supports iter on arrays */
								var new_cells = $.map(table_cells, function (item, i) {
									if (item) return item;
								});

								/* update origin cells as well as data */
								table_cells = RMan.popup[item_name + '_cells'] = new_cells;

								/* clean all */
								table_dom.find('tr').detach();

								/* put on */
								$.each(table_cells, function (i, item) {
									var item_col = parseInt(i % 3);
									if (item_col == 0) { /* starting a new row */
										tr_dom = $('<tr></tr>');
										table_dom.append(tr_dom);
									}
									var td_dom = $('<td></td>');
									td_dom.append(item);
									tr_dom.append(td_dom);
								});

								/* and add a appender cell at the back */
								var i = table_cells.length;
								var item_col = parseInt(i % 3); /* 3 cols per row */
								if (item_col == 0) { /* starting a new row */
									tr_dom = $('<tr></tr>');
									table_dom.append(tr_dom);
								}
								var td_dom = $('<td></td>');
								var appender = $('<button class="mu_iconBtn"><span></span></button>');
								td_dom.append($(appender).button({ icons: {primary:'ui-icon-plusthick'} }));
								tr_dom.append(td_dom);

								/* click to append one textfield for input */
								appender.click(function (e) {
									construct_cell('', true);
									construct_table(); /* and re-cons the table */
								});

							};
						$.each(items_fetched, construct_cell);
						construct_table();
					};
				return construct_item_options;
			};

		/* -*- SOUP option ctor -*- */
		var construct_soup_options = item_option_factory('soup', $('#mu-res-admin-popup-soup'));
		var construct_sauce_options = item_option_factory('sauce', $('#mu-res-admin-popup-sauce'));
		var construct_staple_options = item_option_factory('staple', $('#mu-res-admin-popup-staple'));
		var construct_moar_options = item_option_factory('moar_info', $('#mu-res-admin-popup-moar'));


		/* drink block ctor. data is a object RPC-ed from server  */
		var construct_drink_options = function (data) { /* the drink option block */
		
				var drinkItem_dom = $('<div class="mu_itemsBlk"><div class="mu_itemsBlk_tickbox"></div><a></a></div>')
				
				var drink_dom = $('#mu-res-admin-popup-drink');

				var all_drinks_fetched = data.all_drinks;

				/* using table here... */
				//var table_dom = $('<table border="1"></table>');
				
				//drink_dom.append(table_dom);
				//var tr_dom = null;

				for (var i = 0; i < all_drinks_fetched.length; ++i) { /* constructing each row */
					//var item_row = parseInt(i / 4);
					//var item_col = parseInt(i % 4);
					//if (item_col == 0) { /* starting a new row */
					//	tr_dom = $('<tr></tr>');
					//	table_dom.append(tr_dom);
					//}
					//var td_dom = $('<td></td>');

					/* the current rendering drink option */
					var it = all_drinks_fetched[i]; /* XXX: improving ui */
					var label = $('<span class="label" drinkID="' + String(it.drinkID) + '"><p>' + it.drinkName + '</p></span>');
					var btn = $('<button>enable</button>'); /* register click event */
					btn.click(function (e) {
						var drink_id = $(this).parent().attr('drinkID');
						var selected = all_drinks[drink_id]; /* toggle selection */
						if (selected) {
							all_drinks[drink_id] = false;
							$(this).text('enable');
						} else {
							all_drinks[drink_id] = true;
							$(this).text('disable');
						}
					}); /* XXX: improving ui till here */
					label.append(btn);
					
					//td_dom.append(label);
					//tr_dom.append(td_dom);
					drink_dom.append(label);
					/* save this drink's data */
					all_drinks[it.drinkID] = false;
				}

				/* click on previous selected drinks */
				var sel_drinks = data.sel_drinks;
				for (var i = 0; i < sel_drinks.length; ++i) {
					var drink_id = sel_drinks[i];
					var to_sel = drink_dom.find('[drinkID="' + drink_id + '"]');
					if (to_sel) {
						to_sel.find('button').trigger('click');
					}
				}

				/* called from restaurantAdmin.js:782 when this fancybox is closed */
				RMan.upload_popup_data = function () {
					var to_post = {};

					/* uploading drink data */
					var drink_data = [];
					for (var idx in all_drinks) {
						var selected = all_drinks[idx];
						if (selected) drink_data.push(idx);
					}
					to_post.drink = drink_data;

					/* uploading soup data */
					soup_data = {};
					$.each(RMan.popup.soup_cells, function (i, item) {
						var soup_name = item.find('input').val();
						if (soup_name.trim() == '') /* ignore empty string */
						return;
						var selected = parseInt(item.attr('selected'));
						soup_data[soup_name] = selected;
					});
					to_post.soup = soup_data;


					/* uploading sauce data */
					sauce_data = {};
					$.each(RMan.popup.sauce_cells, function (i, item) {
						var sauce_name = item.find('input').val();
						if (sauce_name.trim() == '') /* ignore empty string */
						return;
						var selected = parseInt(item.attr('selected'));
						sauce_data[sauce_name] = selected;
					});
					to_post.sauce = sauce_data;


					/* uploading staple data */
					staple_data = {};
					$.each(RMan.popup.staple_cells, function (i, item) {
						var staple_name = item.find('input').val();
						if (staple_name.trim() == '') /* ignore empty string */
						return;
						var selected = parseInt(item.attr('selected'));
						staple_data[staple_name] = selected;
					});
					to_post.staple = staple_data;


					/* uploading moar data */
					moar_data = {};
					$.each(RMan.popup.moar_info_cells, function (i, item) {
						var moar_name = item.find('input').val();
						if (moar_name.trim() == '') /* ignore empty string */
						return;
						var selected = parseInt(item.attr('selected'));
						moar_data[moar_name] = selected;
					});
					to_post.moar_info = moar_data;


					/* POST them */
					$.post(post_path + String(food_type), {
						update_data: JSON.stringify(to_post)
					}, function (_) { /* XXX: debug */
						//console.log('done submitting', to_post);
						//console.log('server response', _);
					});
				};

			};

			/* ...and fetch data from the server.
         !dont use getJSON because it WILL FAIL SILENTLY */
		$.get(fetch_path + food_type, function (data) {
			data = $.parseJSON(data);
			//console.log('rpc got data --', data);
			construct_drink_options(data);
			construct_soup_options(data);
			construct_sauce_options(data);
			construct_staple_options(data);
			construct_moar_options(data);
		});

	});
})();
</script>

<div class="mu_pop_title">彈出式選單 (Popup-menu) </div>
<div id="mu-res-admin-popup-wrapper">
	<div id="mu-res-admin-popup-drink">
		<h6>飲品</h6>
		<div class="mu_col1">
			<h7>熱飲</h7>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">香滑奶茶</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">檸檬蜂蜜</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">香濃咖啡</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">檸檬水</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">朱古力</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">柚子茶</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
		</div>
		<div class="mu_col2">
			<h7>凍飲</h7>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">純豆漿</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">可樂</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">七喜</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">香濃咖啡</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">鹹檸檬七喜</div>
				<div class="mu_CD_itemPrice">+0元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">檸檬利賓納</div>
				<div class="mu_CD_itemPrice">+999元</div>
			</div>
			<div class="mu_CD_items">
				<div class="mu_CD_clickBox"></div>
				<div class="mu_CD_itemName">香滑可樂</div>
				<div class="mu_CD_itemPrice">+99999元</div>
			</div>
		</div>
		<div class="clearer"></div>
	</div>
	<div id="mu-res-admin-popup-soup">
		<h6>湯底</h6>
	</div>
	<div id="mu-res-admin-popup-sauce">
		<h6>汁</h6>
	</div>
	<div id="mu-res-admin-popup-staple">
		<h6>主食</h6>
	</div>
	<div id="mu-res-admin-popup-moar">
		<h6>其他選單</h6>
	</div>
</div>
