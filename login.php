<!DOCTYPE html>
<?php
$rememberUsername = "";

//check if cookie is set, then set $rememberUsername to cookie
if (isset($_COOKIE['username'])) {
    $rememberUsername = $_COOKIE['username'];
}
?>

<html>

    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Hotel Login</title>
    </head>

    <!--    <body>
            <div class="row">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="Homepage.php">Hotels</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="review.php">Hotel Reviews</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="contactus.php">Contact Us</a>
                                </li> 
                            </ul>
                        </div>
                </nav>
                <div class="col-md-4" >                    
                    <form style="align-content: center;">
                         Email input 
                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example1" class="form-control" />
                            <label class="form-label" for="form2Example1">Email address</label>
                        </div>
    
                         Password input 
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>
    
                         2 column grid layout for inline styling 
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                 Checkbox 
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>
    
                            <div class="col">
                                 Simple link 
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>
    
                         Submit button 
                        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
    
                         Register buttons 
                        <div class="text-center">
                            <p>Not a member? <a href="#!">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
    
                        </div>
                    </form>
                    <form>
                         Email input 
                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example1" class="form-control" />
                            <label class="form-label" for="form2Example1">Email address</label>
                        </div>
    
                         Password input 
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>
    
                         2 column grid layout for inline styling 
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                 Checkbox 
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>
    
                            <div class="col">
                                 Simple link 
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>
    
                         Submit button 
                        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
    
                         Register buttons 
                        <div class="text-center">
                            <p>Not a member? <a href="#!">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
    
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <br/><br/>
        <a href="register.php">Register</a>
    </body>
    </html>-->
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                form {border: 3px solid #f1f1f1;}

                input[type=text], input[type=password] {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    box-sizing: border-box;
                }

                button {
                    background-color: #04AA6D;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 100%;
                }

                button:hover {
                    opacity: 0.8;
                }

                .cancelbtn {
                    width: auto;
                    padding: 10px 18px;
                    background-color: #f44336;
                }

                .imgcontainer {
                    text-align: center;
                    margin: 24px 0 12px 0;
                }

                img.avatar {
                    width: 40%;
                    border-radius: 50%;
                }

                .container {
                    padding: 16px;
                }

                span.psw {
                    float: right;
                    padding-top: 16px;
                }

                /* Change styles for span and cancel button on extra small screens */
                @media screen and (max-width: 300px) {
                    span.psw {
                        display: block;
                        float: none;
                    }
                    .cancelbtn {
                        width: 100%;
                    }
                }
            </style>
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

                <form method="post" action="doLogin.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table>
                            <tr>
                                <td><label for="id_username">Username:</label></td>
                                <td><input id="id_username" type="text" name="username"/></td>
                            </tr>
                            <tr>
                                <td><label for="id_password">Password:</label></td>
                                <td><input id="id_password" type="password" name="password"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" Value="Login"/></td>
                            </tr>
                        </table>
                    </fieldset>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </form>

        </body>
    </html>

