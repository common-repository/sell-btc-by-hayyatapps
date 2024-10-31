<?php

function HAYYAT_home(){include 'Pages/activation.php';}
function HAYYAT_settings() {include 'Pages/settings.php';}
function HAYYAT_developers() {include 'Pages/developers.php';}
function HAYYAT_orders() {include 'Pages/orders.php';}
function HAPPS_pro() {include 'Pages/pro.php';}



function HAYYAT_CSSJS() {
    wp_enqueue_style( 'sellbtc-style1', plugins_url('CSS/style.css?v=2.1', __FILE__) );
    wp_enqueue_style( 'sellbtc-style2', plugins_url('JS/tipx/jqu.css', __FILE__) );
    wp_enqueue_style( 'sellbtc-style3', plugins_url('JS/tipx/style.css', __FILE__) );
    wp_enqueue_script( 'jquery-ui-tooltip' );

    wp_enqueue_style( 'sellbtc-style4', plugins_url('CSS/admin.css', __FILE__) );


     wp_enqueue_script('sellbtc-script1',plugins_url('JS/a81368914c.js', __FILE__)  );
     wp_enqueue_script('sellbtc-script2',plugins_url('wpbox-admin.js', __FILE__),1 ,1,1 );
     
     wp_enqueue_script('sellbtc-script3',plugins_url('JS/feedback.js', __FILE__),1 ,2,1 );
     wp_enqueue_script('sellbtc-script4',plugins_url('JS/pages.js', __FILE__),1 ,2,1 );

}

function HAYYAT_menu() {
  

  add_menu_page ( 'Menu', 'Sell BTC Lite', 'manage_options', 'MAINMENUHAYYAT', 'HAYYAT_home', 'dashicons-money-alt' );
  add_submenu_page ( 'MAINMENUHAYYAT', 'HAYYAT_settings', 'Settings', 'manage_options','HAYYAT_settings' ,'HAYYAT_settings', '');
  add_submenu_page ( 'MAINMENUHAYYAT', 'HAYYAT_orders', 'Orders', 'manage_options','HAYYAT_orders' ,'HAYYAT_orders', '');
  add_submenu_page ( 'MAINMENUHAYYAT', 'HAYYAT_developers', 'Developers', 'manage_options','HAYYAT_developers' ,'HAYYAT_developers', '');
add_submenu_page ( 'MAINMENUHAYYAT', 'ProHAPPS', 'Go Pro', 'manage_options','ProHAPPS' ,'HAPPS_Pro', '');

}

function orderform_data(){

    $form_data = $_POST['form_var'];
$data = [];
for($i=0;$i<sizeof($form_data);$i++ ) {
        $data[$i]= $form_data[$i]['value'];
    }

HAPPS_ORDER_FORM_ADD($data);

    echo 'FORM_SUBMITTED';
    wp_die();
}



function AP_BTC_GET_ORDERS(){
    global $wpdb;
    $table_name = $wpdb->prefix . "happs_sellbtc_orders";
    
$all_rows = $wpdb->get_results( "SELECT * FROM $table_name");
$all_rows = json_decode(json_encode($all_rows), true);
return $all_rows;   
}


?>