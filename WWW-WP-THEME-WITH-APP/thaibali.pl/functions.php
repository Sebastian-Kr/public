<?php

function change_default_galleria_header()
{
  remove_action('storefront_header', 'storefront_header_cart', 60);
  remove_action('storefront_header', 'storefront_product_search', 40);
  remove_action('storefront_header', 'storefront_primary_navigation', 50);
  remove_action('storefront_header', 'storefront_header_container', 0);
  remove_action('storefront_header', 'storefront_skip_links', 5);
  remove_action('storefront_header', 'storefront_social_icons', 10);
  remove_action('storefront_header', 'storefront_site_branding', 20);
  remove_action('storefront_header', 'storefront_secondary_navigation', 30);
  remove_action('storefront_header', 'storefront_header_container_close', 41);
  remove_action(
    'storefront_header',
    'storefront_primary_navigation_wrapper',
    42
  );
}
add_action('wp_head', 'change_default_galleria_header');




function mb_remove_sidebar() {
  return false;
}
add_filter( 'is_active_sidebar', 'mb_remove_sidebar', 10, 2 );


function create_posttype()
{
  register_post_type(
    'massages',
    // CPT Options
    array(
      'labels' => array(
        'name' => __('Masaże'),
        'singular_name' => __('Masaż')
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'massages'),
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );
}
add_action('init', 'create_posttype');

function create_posttype_modules()
{
  register_post_type(
    'module',
    // CPT Options
    array(
      'labels' => array(
        'name' => __('Moduły specialne'),
        'singular_name' => __('Moduł specialny')
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'module'),
      'supports' => array('title')
    )
  );
}
add_action('init', 'create_posttype_modules');




function prgrm_generate_progressBar($progresValue) {
echo '<div class="specification-progressBar">';
for ($i = 1; $i <= 5; $i++) {
  echo '  <img';
   if ($i <= $progresValue) {
      echo ' class="specification-Item specification-activeItem"';
  } else {
      echo ' class="specification-Item"';

  }
   echo ' src="';
  echo get_stylesheet_directory_uri();
  echo '/img/massage-yes.svg"> ';
}
echo '</div>';
}


// <!-- "billing_email",
//         "billing_first_name", 
//         "billing_last_name", 
//         "billing_company", 
//         "billing_address_1", 
//         "billing_address_2", 
//         "billing_postcode", 
//         "billing_country",
//         "billing_state",
//         "billing_phone" -->



function custom_override_checkout_fields( $fields ) {
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_address_1']);
  unset($fields['billing']['billing_address_2']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_state']);
  unset($fields['billing']['billing_company']);
  unset($fields['billing']['billing_city']);
  return $fields;
  }
  
  add_filter('woocommerce_checkout_fields','custom_override_checkout_fields');

  function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
<nav class="pagination" role="navigation">
    <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
    <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
</nav>



<?php }
}


function prgrm_getNoTranslateProductName ($_product) {
  			// Cut only pl string for product name
        $prgrm_plPosition = strpos($_product->get_name(), '[:pl]')+5;
        $prgrm_enPosition = strpos($_product->get_name(), '[:en]');
        $prgrm_variantString = substr($_product->get_name(), $prgrm_plPosition, $prgrm_enPosition - $prgrm_plPosition);
        
        $prgrm_productName = substr($_product->get_name(), 0, $prgrm_plPosition - 5 );
        $prgrm_productName = $prgrm_productName.$prgrm_variantString;
return $prgrm_productName;
}
?>