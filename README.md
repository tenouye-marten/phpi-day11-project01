# phpi-day11-project01
MySQL in PHP

## CREATE CONNECTION 

    <?php
        $connect = new mysqli('localhost','root','');
    ?>

## CREATE DATABASE

    <?php

        include('connection.php');

        $sql = "create database php1_day11";

        $connect ->query($sql);
        $connect->close();

    ?>

## DROP DATABASE

    <?php

        include('connection.php');

        $sql = "drop database php1_day11";

        $connect ->query($sql);
        $connect->close();

    ?>

