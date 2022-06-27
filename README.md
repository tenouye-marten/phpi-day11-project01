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
## CRETAE TABLE
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
