<?php
include('connection.php');

$sql = "CREATE TABLE product(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
product_name VARCHAR(50) NOT NULL)";

// create table Users
$sqlUsers = "CREATE TABLE users(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(50) NOT NULL,
last_name VARCHAR(50)NOT NULL,
email VARCHAR(50) NOT NULL)";

$connectDB ->query($sqlUsers);
$connectDB->close();

?>