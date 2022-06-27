<?php

include('connection.php');

$sql = "drop database php1_day10";

$connect ->query($sql);
$connect->close();

?>
