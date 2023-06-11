<?php
include "dbFunctions.php";

$theID = $_POST['id']; 
$newDescription = $_POST['description']; 
$newRating = $_POST['rating']; 
$datePosted = $_GET['datePosted'];


$msg = "";
$query = "UPDATE reviews
          SET review='$newDescription',rating='$newRating', datePosted ='$datePosted'
          WHERE reviewId = $theID";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

if ($result) {
    $msg = "record successfully updated";
}
else {
    $msg = "record not updated";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $msg;
        ?>
    </body>
</html>

