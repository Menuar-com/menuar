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
      /* all drinks, fetched from the server */
      var all_drinks = {};

      /* food typeid, for querying */
      var food_type = <?php echo $foo_type ?>;

      /* GET path */
      var fetch_path = 'online/restaurantAdmin/resGetfoodInfoData/';

      /* UPDATE path */
      var post_path = 'online/restaurantAdmin/resUpdatefoodInfoData/';

      $.getJSON(fetch_path + food_type, function (data) {
        console.log(data);
        construct_drink_options(data);
      });

      var wrapper = $('#mu-res-admin-popup-wrapper');
      wrapper.css('width', '400px');

      var drink_dom = $('#mu-res-admin-popup-drink');

      var construct_drink_options = function (data) {
        var all_drinks_fetched = data.all_drinks;
        for (var i = 0; i < all_drinks_fetched.length; ++i) {
          var it = all_drinks_fetched[i];
/* XXX: improving ui */
          var label = $('<div class="label" drinkID="' +
                        String(it.drinkID) + '"><p>' +
                        it.drinkName + '</p></div>');
          var btn = $('<button>enable</button>');
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
          drink_dom.append(label);

          all_drinks[it.drinkID] = false;
        }

        var sel_drinks = data.drinks_selected;
        for (var i = 0; i < sel_drinks.length; ++i) {
          var drink_id = sel_drinks[i];
          var to_sel = drink_dom.find('[drinkID="' + drink_id + '"]');
          if (to_sel) {
            /* init those that are already selected */
            to_sel.find('button').trigger('click');
          }
        }

        window.RMan.upload_popup_data = function () {
          var to_post = {};

          var drink_data = [];
          for (var idx in all_drinks) {
            var selected = all_drinks[idx];
            if (selected) drink_data.push(idx);
          }
          to_post.drink = drink_data;

          $.post(post_path + String(food_type), {
            update_data: JSON.stringify(to_post)
          }, function (_) {
            console.log('done submitting', to_post);
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

