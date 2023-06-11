<?php
session_start();
$msg = "";

////check whether session variable 'user_id' is set
////in other words, check whether the user is already logged in
//if (isset($_SESSION['user_id'])) {
//    $msg = "You are already logged in.";
//} else { //user is not logged in
//    //check whether form input 'username' contains value
//    if (isset($_POST['username'])) {
//retrieve form data
$entered_username = $_POST['username'];
$entered_password = $_POST['password'];

//connect to database
include ("dbFunctions.php");

//        //match the username and password entered with database record
//        $query = "SELECT * FROM users 
//                  WHERE username='$entered_username' AND 
//                  password = SHA1('$entered_password')";
//        $result = mysqli_query($link, $query) or die(mysqli_error($link));
//
//        //if record is found, store id and username into session
//        if (mysqli_num_rows($result) == 1) {
//            $row = mysqli_fetch_array($result);
//            $_SESSION['user_id'] = $row['id'];
//            $_SESSION['username'] = $row['username'];
//            $_SESSION['role'] = $row['role'];
//
//            
//            header("location: index.php");
//        } else { //record not found
//            $msg = "Sorry, you must enter a valid username 
//                    and password to log in.";
//        }
//    } 
//}

$queryCheck = "SELECT * FROM users
          WHERE username='$entered_username'
          AND password = SHA1('$entered_password')";

$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['user_id'] = $row['userId'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];

    if (isset($_POST['remember'])) {
        setcookie("username", $row['username'], time() + 3600 * 24);
    }
    $msg = "<p><i>You are logged in as " . $_SESSION['username'] . "</p>";
    $msg .= "<p><a href='home.php'>Proceed to HomePage.</a></p>";
    $msg .= "<p> User is in the database </p>";
} else {
    $msg = "<p> User is not in the database </p>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
        <title>Items for Sale</title>
    </head>
    <body>
        <h3>Hotel Login</h3>
<?php
echo $msg;
?>
    </body>
</html>