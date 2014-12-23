<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 4:33 PM
 */
$id = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "DELETE FROM `students`.`users` WHERE `users`.`ID` = $id";

mysqli_query($link, $query);

header('location:list1.php');