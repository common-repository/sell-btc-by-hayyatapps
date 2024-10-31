<?php 

function HAPPS_ORDER_FORM_DELDB(){

global $wpdb;
 $table_name = $wpdb->prefix . "happs_sellbtc_orders";
$sql = "DROP TABLE IF EXISTS $table_name";
$wpdb->query($sql);

}

function HAPPS_ORDER_FORM_ADD($data){
 global $wpdb;
 $table_name = $wpdb->prefix . "happs_sellbtc_orders";

 $wpdb->insert($table_name, array(

"happs-FirstName"=>trim($data[0]),
"happs-LastName"=>trim($data[1]),
"happs-Email"=>trim($data[2]),
"happs-Phone"=>trim($data[3]),
"happs-AddressLine1"=>trim($data[4]),
"happs-AddressLine2"=>trim($data[5]),
"happs-City"=>trim($data[6]),
"happs-State"=>trim($data[7]),
"happs-Country"=>trim($data[8]),
"happs-CustomMessage"=>trim($data[9]),
"happs-UntitledInput1"=>trim($data[10]),
"happs-UntitledInput2"=>trim($data[11]),
"hidden-calc-from"=>trim($data[12]),
"hidden-calc-to"=>trim($data[13]),
"hidden-calc-amount"=>trim($data[14]),
"hidden-calc-rate"=>trim($data[15]),
"hidden-calc-fee"=>trim($data[16]),
"hidden-calc-getamount"=>trim($data[17])

));

$mail_data = [trim($data[12]),trim($data[13]),trim($data[14])];
 return 1;
}




function HAPPS_ORDER_FORM_createDB(){
global $wpdb;
$table_name = $wpdb->prefix . "happs_sellbtc_orders";

if ( $wpdb->get_var("SHOW TABLES LIKE '{$table_name}'") != $table_name ) {

 $sql = "CREATE TABLE $table_name (
 NO INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,

`happs-FirstName`VARCHAR(255) DEFAULT NULL,
 `happs-LastName`VARCHAR(255) DEFAULT NULL,
 `happs-Email`VARCHAR(255) DEFAULT NULL,
 `happs-Phone`VARCHAR(255) DEFAULT NULL,
 `happs-AddressLine1`VARCHAR(255) DEFAULT NULL,
 `happs-AddressLine2`VARCHAR(255) DEFAULT NULL,
 `happs-City`VARCHAR(255) DEFAULT NULL,
 `happs-State`VARCHAR(255) DEFAULT NULL,
 `happs-Country`VARCHAR(255) DEFAULT NULL,
 `happs-CustomMessage`VARCHAR(255) DEFAULT NULL,
 `happs-UntitledInput1`VARCHAR(255) DEFAULT NULL,
 `happs-UntitledInput2`VARCHAR(255) DEFAULT NULL,
 `hidden-calc-from`VARCHAR(255) DEFAULT NULL,
 `hidden-calc-to`VARCHAR(255) DEFAULT NULL,
 `hidden-calc-amount`VARCHAR(255) DEFAULT NULL,
 `hidden-calc-rate`VARCHAR(255) DEFAULT NULL,
 `hidden-calc-fee`VARCHAR(255) DEFAULT NULL,
 `hidden-calc-getamount`VARCHAR(255) DEFAULT NULL

 );";

 require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
 dbDelta($sql);

}


}






?>