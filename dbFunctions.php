<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "c203_hotelreviewdb";
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or
        die(mysqli_connect_error());

//if (!$link) {
//    die(mysqli_error($link));
//    // alternative way to display the error:
//    // die(mysqli_connect_error());
//}
?>
