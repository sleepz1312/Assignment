<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

include "dbFunctions.php";

$reviewid = $_GET['reviewId'];

$msg = "";
$query = "DELETE FROM reviews
          WHERE reviewId = $reviewid";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

if ($result) {
    $msg = "review has been deleted";
}
else {
    $msg = "review deletion failed";
}

mysqli_close($link);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete</title>
    </head>
    <body>
        <?php
        echo $msg;
        ?>
    </body>
</html>
