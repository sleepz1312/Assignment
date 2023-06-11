<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//$db_host = "localhost";
//$db_user = "root";
//$db_pass = "";
//$db_name = "c203_hotelreviewdb";
//$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or
//        die(mysqli_connect_error());
include "dbFunctions.php";
$hotelID = $_GET['hotelId'];
$query = "SELECT * FROM reviews
        INNER JOIN hotels ON reviews.hotelId=hotels.hotelId 
        INNER JOIN users ON reviews.userId=users.userId 
        WHERE hotels.hotelId=$hotelID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Review</title>
    </head>
    <body><div class="row">
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
                        <style> 
                            table {
                                border-collapse: collapse;
                                width: 100%;
                            }
                            th, td {
                                text-align: left;
                                padding:6px;
                            }
                            tr:nth-child(even) {
                                background-color: #B9BBB6;
                            }
                        </style>
                    </div>
                </div>
        </div>

        <h1>Review</h1>
        <a href="addReview.php?hotelId=<?php echo $hotelID; ?>">Add a review</a>

        <table border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>Review</th>
                <th>Rating</th>
                <th>Date Posted</th>
                <th>User id</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php
            for ($i = 0; $i < count($arrContent); $i++) {
                $hotelid = $arrContent[$i]['hotelId'];
                $reviewid = $arrContent[$i]['reviewId'];
                $userid = $arrContent[$i]['userId'];
                $review = $arrContent[$i]['review'];
                $rating = $arrContent[$i]['rating'];
                $date = $arrContent[$i]['datePosted'];
                ?>
                <tr>
                    <td><?php echo $review; ?></td>
                    <td><?php echo $rating; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $userid; ?></td>
                    <td><a href="editReview.php?reviewId=<?php echo $reviewid; ?>">Edit</a></td>
                    <td><a href="deleteReview.php?reviewId=<?php echo $reviewid; ?>">Delete</a></td>
                </tr>

                <?php
            }
            ?>      
        </table>


        <br/><br/>
        <a href="home.php?id=">Back to homepage</a>
    </body>
</html>
