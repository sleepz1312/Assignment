<?php
include "dbFunctions.php";

$query = "SELECT * FROM hotels";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Hotel List</title>
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
            <h1>List of hotels</h1>
            <table border="2" cellpadding="2" cellspacing="2">
                <tr>
                    <th>Image</th>
                    <th>Hotel Name</th>
                    <th>Hotel Address</th>
                    <th>Hotel review</th>
                    <th>Contact number</th>
                    <th>Description</th>
                </tr>

                <?php
                for ($i = 0; $i < count($arrContent); $i++) {
                    $id = $arrContent[$i]['hotelId'];
                    $name = $arrContent[$i]['hotelName'];
                    $hotelAddress = $arrContent[$i]['hotelAddress'];
                    $contactNo = $arrContent[$i]['contactNo'];
                    $description = $arrContent[$i]['description'];
                    $picture = $arrContent[$i]['picture'];
                    ?>

                    <tr>
                        <td><img src="hotel photos/<?php echo $picture; ?>" width="100"/></td>
                       <td><?php echo $name; ?></td>
                        <td><?php echo $hotelAddress; ?></td>
                         <td><a href="details.php?id=<?php echo $id; ?>">View Hotel</a></td>
                        <td><?php echo $contactNo; ?></td>
                        <td><?php echo $description; ?></td>
                    </tr>
                    <?php
                }
                ?>		
            </table>
    </body>
</html>
