<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Register</title>

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
        </div>
        <font color="red">*</font> -Mandatory Fields<br/><br/>
        <form name="frmRegister" method="post" action="doRegistration.php">
            <legend><h1>Register</h1></legend>
            <label for=idFullname> Fullname <font color="red">*</font>: </label>
            <input id="idFullname" type="text" name="name" size="20" maxlength="100" required
                   placeholder="Enter your full name" autofocus/><br/><br/>
            <label for=idAddress> Residential Address <font color="red">*</font>: </label>
            <input id="idAdress" type="text" name="address" size="20" maxlength="100" required
                   placeholder="Enter your residential address" /><br/><br/>

            <label for=idEmail>Email <font color="red">*</font>:</label>
            <input id="idEmail" type="email" name="email" size="20" maxlength="100" required
                   placeholder="john@gmail.com"/><br/><br/>

            <label for=idUsername> Username <font color="red">*</font>: </label>
            <input id="idUsername" type="text" name="username" size="20" maxlength="100" required
                   placeholder="Enter your username name" autofocus/><br/><br/>
            <label for=idPassword>Password <font color="red">*</font>:</label>
            <input id="idPassword" type="password" name="password" size="20" maxlength="100" required/>
            <br/><br/>

            <input type="submit" value ="Register"/>
            <input type="reset" value="Reset"/>
    </body>
</form>
</html>


