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
            </div>
         </div>
        <footer>
        </footer>
    </div>
    <?php include ("_popup.php");?>
</body>
</html>