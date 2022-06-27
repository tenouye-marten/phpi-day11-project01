<?php
include('connection.php');

$sql =  "INSERT INTO `product`( `product_name`) VALUES ('Black Coffe')";



$connectDB ->query($sql);

$connectDB ->close();


?>