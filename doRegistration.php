<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
// Retrieve form data
$theName = $_POST['name'];
$theAddress = $_POST['address'];
$theEmail = $_POST['email'];
$theUsername = $_POST['username'];
$thePassword = $_POST['password'];
$message = "";



// Database parameters
include 'dbFunctions.php';


// Build sql query
$query = "INSERT INTO
users (username, password, name, address, email)
VALUE ('$theUsername', '$thePassword', '$theName', '$theAddress', '$theEmail')";


// Execute query
$result = mysqli_query($link, $query)
        or
        die('Error query databse');



// Process result
if ($result) {
    $message = "Record inserted";
} else {
    $message = "Insertion failed";
}



// Close DB connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $message;
        ?>
        <br>
        <a href="login.php">Login here</a>
    </body>
</html>