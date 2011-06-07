<style>
  .label p {
    padding: 10px;
    display: inline;
  };
</style>

<script>
  (function () {
  /* TODO: better ui, separate js from view */

    $(document).ready(function () {
      /* our namespace */
      RMan.popup = {};

      /* all drinks, fetched from the server */
      var all_drinks = {};

      /* food typeid, for querying */
      var food_type = <?php echo $foo_type ?>;

      /* GET path */
      var fetch_path = 'online/restaurantAdmin/resGetfoodInfoData/';

      /* UPDATE path */
      var post_path = 'online/restaurantAdmin/resUpdatefoodInfoData/';

      /* DELETE path */
      var del_path = 'online/restaurantAdmin/resDeletefoodInfoData/';

      /* dont use getJSON because it WILL FAIL SILENTLY */
      $.get(fetch_path + food_type, function (data) {
        data = $.parseJSON(data);
        console.log('rpc got data --', data);
        construct_drink_options(data);
        construct_soup_options(data);
      });

      /* wrapper for all option blocks */
      var wrapper = $('#mu-res-admin-popup-wrapper');
      wrapper.css('width', '720px');

      var item_option_factory = function (item_name, item_dom) {
        var construct_item_options = function (data) {
          /* get data from server */
          var items_fetched = data[item_name] || {};

          /* the table to display cells */
          var table_dom = $('<table border="1"></table>');
          item_dom.append(table_dom);

          /* the cells */
          var table_cells = RMan.popup[item_name + '_cells'] = [];

          /* construct one cell */
          var construct_cell = function (name, enabled) {
            var cell_created = $('<span selected="0"><input value="' +
                                 name + '"></input></span>');
            var btn = $('<button>enable</button>');
            var del_this = $('<a>x</a>');

            /* toggle selection */
            btn.click(function (e) {
              var par = $($(this).parent());
              var was_enabled = parseInt(par.attr('selected'));
              if (was_enabled) {
                $(this).text('enable');
                par.attr('selected', '0');
              } else {
                $(this).text('disable');
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
                    console.log('deletion succ', res);
                  });
                  table_cells[key] = null;
                }
              });
              construct_table();  /* after deletion: resize the table */
            });

            cell_created.append(btn);
            cell_created.append(del_this);
            table_cells.push(cell_created);

            if (enabled) /* set enable */
              btn.trigger('click');
          };

          /* called when the table is modified */
          var construct_table = function () {
            /* note as before $1.6, $.map only supports iter on arrays */
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
              if (item_col == 0) {
                /* starting a new row */
                tr_dom = $('<tr></tr>');
                table_dom.append(tr_dom);
              }
              var td_dom = $('<td></td>');
              td_dom.append(item);
              tr_dom.append(td_dom);
            });

            /* and add a appender cell at the back */
            var i = table_cells.length;
            var item_col = parseInt(i % 3);  /* 3 cols per row */
            if (item_col == 0) {
              /* starting a new row */
              tr_dom = $('<tr></tr>');
              table_dom.append(tr_dom);
            }
            var td_dom = $('<td></td>');
            var appender = $('<a>add one more</a>');
            td_dom.append(appender);
            tr_dom.append(td_dom);

            /* click to append one textfield for input */
            appender.click(function (e) {
              construct_cell('', true);
              construct_table();  /* and re-cons the table */
            });
          };

        };

        return construct_item_options;
      };

      /* -*- SOUP option ctor -*- */
      var construct_soup_options = function (data) {
        var soup_dom = $('#mu-res-admin-popup-soup');
        var soups_fetched = data.soups || {
          chicken: false,
          meat: true
        };
        var table_dom = $('<table border="1"></table>');
        soup_dom.append(table_dom);

        /* share to callback function.
          items: jq-dom-nodes */
        var table_cells = RMan.popup.soup_cells = [];

        /* here the info are stored directly in the dom node created */
        var construct_cell = function (name, enabled) {
          var cell_created = $('<span selected="0"><input value="' +
                               name + '"></input></span>');
          var btn = $('<button>enable</button>');
          var del_this = $('<a>x</a>');

          /* toggle selection */
          btn.click(function (e) {
            var par = $($(this).parent());
            var was_enabled = parseInt(par.attr('selected'));
            if (was_enabled) {
              $(this).text('enable');
              par.attr('selected', '0');
            } else {
              $(this).text('disable');
              par.attr('selected', '1');
            }
          });

          del_this.click(function (e) {
            var par = $($(this).parent());
            $.each(table_cells, function (key, val) {
              if ($(val)[0] == par[0]) {
                /* got this cell -- delete it
                   and issue a deletion to the server */
                var to_del = {};
                var soup_name = par.find('input').val();
                to_del[soup_name] = 1;

                $.post(del_path + String(food_type), {
                  delete_data: JSON.stringify({
                                 soup: to_del
                               })
                }, function (res) {
                  console.log('deletion succ', res);
                });
                table_cells[key] = null;
              }
            });
            construct_table();  /* resize the table */
          });

          cell_created.append(btn);
          cell_created.append(del_this);
          table_cells.push(cell_created);

          if (enabled) /* set enable */
            btn.trigger('click');
        };


        /* called when cells are modified */
        var construct_table = function () {
          /* note as before $1.6, $.map only supports iter on arrays */
          var new_cells = $.map(table_cells, function (item, i) {
            if (item) return item;
          });

          /* update origin cells as well as data */
          table_cells = RMan.popup.soup_cells = new_cells;

          /* clean all */
          table_dom.find('tr').detach();

          /* put on */
          $.each(table_cells, function (i, item) {
            var item_col = parseInt(i % 3);
            if (item_col == 0) {
              /* starting a new row */
              tr_dom = $('<tr></tr>');
              table_dom.append(tr_dom);
            }
            var td_dom = $('<td></td>');
            td_dom.append(item);
            tr_dom.append(td_dom);
          });

          /* and add a appender cell at the back */
          var i = table_cells.length;
          var item_col = parseInt(i % 3);  /* 3 cols per row */
          if (item_col == 0) {
            /* starting a new row */
            tr_dom = $('<tr></tr>');
            table_dom.append(tr_dom);
          }
          var td_dom = $('<td></td>');
          var appender = $('<a>appender</a>');
          td_dom.append(appender);
          tr_dom.append(td_dom);

          /* click to append one textfield for input */
          appender.click(function (e) {
            construct_cell('', true);
            construct_table();  /* and re-cons the table */
          });
        };

        /* init the soup options using the json data */
        $.each(soups_fetched, construct_cell);
        construct_table();
      };


      /* drink block ctor. data is a object RPC-ed from server  */
      var construct_drink_options = function (data) {
        /* the drink option block */
        var drink_dom = $('#mu-res-admin-popup-drink');

        var all_drinks_fetched = data.all_drinks;

        /* using table here... */
        var table_dom = $('<table border="1"></table>');
        drink_dom.append(table_dom);
        var tr_dom = null;

        for (var i = 0; i < all_drinks_fetched.length; ++i) {
          /* constructing each row */
          var item_row = parseInt(i / 4);
          var item_col = parseInt(i % 4);
          if (item_col == 0) {
            /* starting a new row */
            tr_dom = $('<tr></tr>');
            table_dom.append(tr_dom);
          }
          var td_dom = $('<td></td>');

          /* the current rendering drink option */
          var it = all_drinks_fetched[i];
/* XXX: improving ui */
          var label = $('<span class="label" drinkID="' +
                        String(it.drinkID) + '"><p>' +
                        it.drinkName + '</p></span>');
          var btn = $('<button>enable</button>');
          /* register click event */
          btn.click(function (e) {
            var drink_id = $(this).parent().attr('drinkID');
            var selected = all_drinks[drink_id];
            /* toggle selection */
            if (selected) {
              all_drinks[drink_id] = false;
              $(this).text('enable');
            } else {
              all_drinks[drink_id] = true;
              $(this).text('disable');
            }
          });
/* XXX: improving ui till here */
          label.append(btn);
          td_dom.append(label);
          tr_dom.append(td_dom);

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
            if (soup_name.trim() == '')  /* ignore empty string */
              return;
            var selected  = parseInt(item.attr('selected'));
            soup_data[soup_name] = selected;
          });
          to_post.soup = soup_data;

          /* POST them */
          $.post(post_path + String(food_type), {
            update_data: JSON.stringify(to_post)
          }, function (_) {
            /* XXX: debug */
            console.log('done submitting', to_post);
            console.log('server response', _);
          });
        };

      };

    });

  })();
</script>

<div>
editing ...
</div>

<div id='mu-res-admin-popup-wrapper'>
  <div id='mu-res-admin-popup-drink'>
    drink
  </div>
  <div id='mu-res-admin-popup-soup'>
    soup
  </div>
  <div id='mu-res-admin-popup-sauce'>
    sauce
  </div>
  <div id='mu-res-admin-popup-staple'>
    staple
  </div>
  updating food info
</div>

