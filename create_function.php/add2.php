<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");



$query = "INSERT INTO `students`.`users` ( `first_name` , `last_name` )

                                        VALUES (
                                             '".$_POST['full_Name']."', '".$_POST['last_Name']."'
                                        );";
mysqli_query($link, $query);

echo $query;