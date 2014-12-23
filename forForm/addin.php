<?php

//$firstName = $_POST['firstName'];
//$lastName  = $_POST['lastName'];
//$phoneNumber=$_POST['Phone Number']

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "INSERT INTO `students`.`users` (`ID`,
`first_name`,
`last_name`,
`phone_number`
)
VALUES ('".$_POST['ID']."','".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['phoneNumber']."'
);";

mysqli_query($link, $query);

header('location:list1.php');
//'$firstName', '$lastName','$phoneNumber'