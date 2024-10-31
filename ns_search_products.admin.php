<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
//Amministrazione WP

//Genero la pagina
function ns_productsearch_update_options_form()
{
    ?>
    <div class="wrap">
    <div class="icon32" id="icon-options-general"><br /></div>
    <h2>FREE NS Ajax Product Search Configuration</h2>
    <form method="post" action="options.php">


    <?php settings_fields('ns_options_group');  ?>
  
       </form>
   </div>



    <?php
}

//Aggiungo il link all'amministrazione
// function ns_add_option_page()
// {
    // add_menu_page( 'NS Ajax Search', 'NS Ajax Search', 'administrator', 'ns-productsearch-options-page', 'ns_productsearch_update_options_form', NS_SEARCH_PRODUCT_WC_PLUGIN_ROOT . '/asset/backend-sidebar-icon.png', 60 );
// }
 
// add_action('admin_menu', 'ns_add_option_page');


/* *** include admin option *** */
require_once( plugin_dir_path( __FILE__ ).'ns-admin-options/ns-admin-options-setup.php');
