<?php

function HAYYAT_scripts() {
global $post;

      //=========
    if( has_shortcode( $post->post_content, 'SELL-BTC-HAYYATAPPS') ) {


//------------ PLAYER-----

wp_enqueue_script( 'sellbtc-script_p1', plugins_url('/JS/a81368914c.js', __FILE__) ); 
wp_enqueue_script( 'sellbtc-script_p2', plugins_url('/lib/js/formatters.js', __FILE__) ); 
wp_enqueue_script( 'sellbtc-script_p3', plugins_url('/lib/js/script.js', __FILE__), array('jquery'),'2.1',1 ); 
wp_enqueue_script( 'sellbtc-script_p4', plugins_url('/lib/js/menu-haaps.js', __FILE__), array('jquery'),'2.1',1 ); 

wp_enqueue_script( 'sellbtc-script_p5', plugins_url('/lib/js/orders.js', __FILE__), array('jquery'),'2.1',1 ); 
wp_enqueue_script( 'sellbtc-script_p6', plugins_url('/lib/js/ex.js', __FILE__), array('jquery'),'2.1',1 ); 
wp_enqueue_script( 'sellbtc-script_p7', plugins_url('/lib/js/hayyatapps.js', __FILE__), array('jquery'),'2.1',1 ); 



wp_enqueue_style( 'sellbtc-style_p1', plugins_url('/lib/css/skin.css', __FILE__) );
wp_enqueue_style( 'sellbtc-style_p2', plugins_url('/lib/css/css.css', __FILE__) );
wp_enqueue_style( 'sellbtc-style_p3', plugins_url('/lib/css/additional-css.css', __FILE__) );



//--------------------        


    }

      //=========
 }



 
 function HAYYAT_initiate($atts, $content = null){

    extract(shortcode_atts(array(
      "id" => '1',    
   ), $atts));
   
$ico_happs = plugins_url('/lib/', __FILE__);




$happs_from = '

<div class="happs-dropdown happs-noselect">

  <div class="happs-list-btn" happs-curr-from="USD" list="happs-from">
      <span class="happs-menu-item happs-selected"><img src="'.$ico_happs.'icons/fiat/usd.png" class="happs-icons"> USD <i class="fas fa-chevron-down happs-down-arrow"></i></span>
</div>

  <div class="happs-list" data-list="happs-from">
   <span class="happs-menu-item" data-value-1="USD" data-f="2.5%" data-mf="1" data-ma="10">
<img src="'.$ico_happs.'icons/fiat/usd.png" class="happs-icons"> USD</span>
  </div>
</div>

';




$happs_to = '

<div class="happs-dropdown happs-noselect">
  <div class="happs-list-btn" happs-curr-to="BTC" list="happs-to">
        <span class="happs-menu-item happs-selected"><img src="'.$ico_happs.'icons/btc.png" class="happs-icons"> BTC <i class="fas fa-chevron-down happs-down-arrow"></i></span>
  </div>

  <div class="happs-list" data-list="happs-to">

 <span class="happs-menu-item" data-value-2="BTC">
<img src="'.$ico_happs.'icons/btc.png" class="happs-icons"> BTC</span> 

<span class="happs-menu-item" data-value-2="ETH">
<img src="'.$ico_happs.'icons/eth.png" class="happs-icons"> ETH</span>

 </div>
</div>

';


//============= PLAYER CONTENT ==========
ob_start();
include 'lib/index.php';
$output = ob_get_clean();
return $output;
//====================================== 


   
}

?>