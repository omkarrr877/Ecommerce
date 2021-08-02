<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

$query = "CREATE TABLE `ecommerce`.`New` ( `id` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(255) NOT NULL ,  `image` VARCHAR(255) NOT NULL ,  `ratings` FLOAT NOT NULL ,  `price` FLOAT NOT NULL ,  `discount` FLOAT NOT NULL ,  `discription` TEXT NOT NULL ,  `status` BOOLEAN NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;"

$create = mysqli_query($conn, $query);
?>