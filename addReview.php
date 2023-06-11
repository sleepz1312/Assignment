<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

include "dbFunctions.php";

$hotelId = $_GET['hotelId'];

$query = "SELECT * FROM reviews INNER JOIN hotels ON reviews.hotelId=hotels.hotelId WHERE hotels.hotelId=$hotelId";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);

mysqli_close($link);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title></title>
    </head>
    <body>
        <div class="row">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">Hotels</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="review.php">Hotel Reviews</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Log Out</a>
                            </li> 
                        </ul>
                    </div>
                    <div class="col-md-4" >                    
                        <form class="d-flex">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-primary" type="button">Search</button>
                        </form>
                        </nav>

                        <form method="post" action="doAddReview.php" >
                            <div style="width:400px;">
                                <b>Description:</b> 
                                <textarea name="description" rows="3" cols="30"></textarea><br/>

                                <b>Ratings:</b> 
                                <input type="number" name="rating" /><br/>

                            </div>
                            <input type="hidden" name="id" value="<?php echo $hotelId ?>"/><br/>
                            <input type="submit" value = "submit" href="doAddReview.php?=reviewId<?php echo $hotelId ?>"/>
                        </form>
                        <?php
                        // put your code here
                        ?>
                        </body>
                        </html>
