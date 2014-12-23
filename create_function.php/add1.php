<?php
$firstName =$_POST['full_Name'];
$lastName =$_POST['last_Name'];
$email =$_POST['email'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");



$query = "INSERT INTO `students`.`users` ( `first_name` , `last_name`,`email_add` )

                                        VALUES ('$firstName','$lastName','$email')";
mysqli_query($link, $query);

