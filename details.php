<?php
include "dbFunctions.php";

$theID = $_GET['id'];

$query = "SELECT * FROM hotels WHERE hotelId=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
if (!empty($row)) {
    $image = $row['picture'];
    $name = $row['hotelName'];
    $address = $row['hotelAddress'];
    $contact = $row['contactNo'];
    $description = $row['description'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Hotel Details</title>
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
                        </ul>
                    </div>
            </nav>
            <?php if (!empty($name)) { ?>
                <div style="width:350px;">
                    <img src="hotel photos/<?php echo $image ?>" width="200"/><br/>
                    <b>Hotel name:</b> <?php echo $name ?><br/>
                    <b>Address:</b> <?php echo $address ?><br/>
                    <b>Contact Number:</b> <?php echo $contact ?><br/>
                    <b>Description:</b> <?php echo $description ?><br/>
                    <form method="post" action="review.php?hotelId=<?php echo $theID ?>">
                        <table>
                            <tr>
                                <td></td>
                                <td><input type="submit" Value="See Review"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
            <?php } ?>
    </body>
</html>