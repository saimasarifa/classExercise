<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 4:33 PM
 */
=======

>>>>>>> 3d79987354c924685bf422f6e60814a380760b85
$id = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "DELETE FROM `students`.`users` WHERE `users`.`ID` = $id";

mysqli_query($link, $query);

<<<<<<< HEAD
header('location:list1.php');
=======
header('location:list1.php');
?>
>>>>>>> 3d79987354c924685bf422f6e60814a380760b85
