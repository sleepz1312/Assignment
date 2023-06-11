<?php
include "dbFunctions.php";

$theID = $_GET['reviewId'];

$query = "SELECT * FROM reviews 
        INNER JOIN users ON reviews.userId=users.userId
        WHERE reviewId=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title> </title>
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
                        <form method="post" action="doEditReview.php?=reviewId<?php echo $theID ?>" >
                            <div style="width:400px;">
                                <b>Description:</b> 
                                <textarea name="description" rows="3" cols="30"><?php echo $row['review'] ?></textarea><br/>

                                <b>Ratings:</b> 
                                <input type="number" name="rating" value="<?php echo $row['rating'] ?>"/><br/>

                                <b>Username:</b> 
                                <input type="text" name="username" value="<?php echo $row['username'] ?>"/><br/>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $row['reviewId'] ?>"/><br/>
                            <input type="submit" value = "submit" href="doEditReview.php?=reviewId<?php echo $theID ?>"/>
                        </form>
                        </body>
                        </html>
