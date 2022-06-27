<?php

include('connection.php');

$sql = "drop database php1_day11";

$connect ->query($sql);
$connect->close();

?>