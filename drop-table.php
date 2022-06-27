<?php
include('connection.php');

$sql = "drop table users";

$connectDB ->query($sql);
$connectDB->close();


?>