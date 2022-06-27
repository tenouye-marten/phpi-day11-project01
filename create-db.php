<?php

include('connection.php');

$sql = "create database php1_day11";

$connect ->query($sql);
$connect->close();

?>