<?php 
    session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guest page</title>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
    
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" type="image/png" href="./assets/images/logo.png"/>
</head>
<body>
    <div class="container">
        <div class='row'>
            <div class="col-md-4 col-lg-4 col-xl-3 mt-5 left-content">
                <div class='text-center'>
                    <img src="./assets/images/logo.png" alt="Logo"/>
                </div>
                <hr class="w-25">
                <h4 class="title-page text-center mb-5">Guestbook</h4>
                <p class="lead">Feel free to leave us a short message to tell us what you think to our services.</p>
                <p class="mb-5"><a href="javascript:void(0)" class="btn btn-success btn-lg post-message" onclick="newFeedbackForm()">Post a Message</a></p>
                <?php if(isset($_SESSION['user_name'])) { ?>
                    <a href="javascript:void(0)" class="admin-login-link">Hi <?=$_SESSION['user_name'];?></a>
                    <a href="./logout.php" class="admin-logout-link">Log out</a>
                <?php } else { ?>
                     <a href="javascript:void(0)" class="admin-login-link" onclick="openLoginForm()">Admin login</a>
                <?php }?>
                <div class="flash-message"></div>
                <?php if (isset($_SESSION['message'])) { echo $_SESSION["message"]; unset($_SESSION["message"]); } ?>
            </div>
            <div class="content-box col-md-8 col-lg-8 col-xl-9" id="target-content">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <p>HTML is the standard markup language for describing the structure of the web pages. Our HTML tutorials will help you to understand the basics of latest HTML5 language, so that you can create your own website.</p>
                        <p class="guest-name">Janie Jones
                            <span>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </span>
                        </p>
                        <span class="timer">21st Mar, 2017 at 09:43 AM</span>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <p>CSS is used for describing the presentation of web pages. CSS can save a lot of time and effort. Our CSS tutorials will help you to learn the essentials of latest CSS3, so that you can control the style and layout of your website.</p>
                        <p class="guest-name">Janie Jones
                            <span>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </span>
                        </p>
                        <span class="timer">21st Mar, 2017 at 09:43 AM</span>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <p>JavaScript is the most popular and widely used client-side scripting language. Our JavaScript tutorials will provide in-depth knowledge of the JavaScript including ES6 features, so that you can create interactive websites.</p>
                        <p class="guest-name">Janie Jones
                            <span>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </span>
                        </p>
                        <span class="timer">21st Mar, 2017 at 09:43 AM</span>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <p>Bootstrap is a powerful front-end framework for faster and easier web development. Our Bootstrap tutorials will help you to learn all the features of latest Bootstrap 4 framework so that you can easily create responsive websites.</p>
                        <p class="guest-name">Janie Jones
                            <span>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </span>
                        </p>
                        <span class="timer">21st Mar, 2017 at 09:43 AM</span>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <p>PHP is the most popular server-side scripting language for creating dynamic web pages. Our PHP tutorials will help you to learn all the features of latest PHP7 scripting language so that you can easily create dynamic websites.</p>
                        <p class="guest-name">Janie Jones
                            <span>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </span>
                        </p>
                        <span class="timer">21st Mar, 2017 at 09:43 AM</span>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <p>SQL is a standard language designed for managing data in relational database management system. Our SQL tutorials will help you to learn the fundamentals of the SQL language so that you can efficiently manage your databases.</p>
                        <p class="guest-name">Janie Jones
                            <span>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </span>
                        </p>
                        <span class="timer">21st Mar, 2017 at 09:43 AM</span>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <p>Our references section outlines all the standard HTML5 tags and CSS3 properties along with other useful references such as color names and values, character entities, web safe fonts, language codes, HTTP messages, and more.</p>
                        <p class="guest-name">Janie Jones
                            <span>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </span>
                        </p>
                        <span class="timer">21st Mar, 2017 at 09:43 AM</span>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <p>Our Frequently Asked Questions (FAQ) section is an extensive collection of FAQs that provides quick and working solution of common questions and queries related to web design and development with live demo.</p>
                        <p class="guest-name">Janie Jones
                            <span>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </span>
                        </p>
                        <span class="timer">21st Mar, 2017 at 09:43 AM</span>
                    </div>
                </div>
            </div>
         </div>
        <footer>
        </footer>
    </div>
    <?php include ("_popup.php");?>
</body>
</html>