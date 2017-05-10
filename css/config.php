<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
  	<title>Shopping Cart </title>
	</head>
	<body>

<?php
$currency = '$ '; 

$db_username = 'root';
$db_password = 'root';
$db_name = 'cart';
$db_host = 'localhost';

$shipping_cost      = 10.50;
$taxes              = array( 
                            'Service Fee' => 12, 
                            'State Tax' => 5
                            );                      
//connect to MySql                      

$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);                        
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
</body>
</html>