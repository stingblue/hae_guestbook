<?php
    session_start();
    include('db.php');
    include('helper.php');
    //hash: BCRYPT
    //admin/admin1234

    if (isset($_POST['username']) && isset($_POST['psw']) )
    {
        //collect and clean up user input
        $username = mysqli_real_escape_string($conn,sanitizeString($_POST['username']));
        $password = mysqli_real_escape_string($conn,sanitizeString($_POST['psw']));

        // let us perform input check for empty 
        if(empty($username) || empty($password))
        {
            $_SESSION['message']='<p class="alert-danger">Please enter username and password!</p>';
            header('location:index.php');
            return false;
        }
        //perform a query to check if there is such user
        $query = "SELECT * FROM users WHERE user_name='$username'";
        $result = mysqli_query($conn,$query);
        $num_row = mysqli_num_rows($result);
        //if there is a user with collected details
        if($num_row == 1)
        {
            $getdata = mysqli_fetch_assoc($result);
            $hashed_password = $getdata['user_pass'];
            // Verify stored hash against plain-text password
            if (password_verify($password, $hashed_password))
            {
                //prepare session variables
                $_SESSION['user_name']= $username;
                $_SESSION['role_id'] = $getdata['role_id'];
                // Check if a newer hashing algorithm is available
                if( password_needs_rehash($hashed_password , PASSWORD_BCRYPT))
                {
                    // If so, create a new hash, and replace the old one
                    $rehashed_password = password_hash($password, PASSWORD_BCRYPT );
                    /* store the rehashed password in MySQL */
                    $query = "UPDATE users SET user_pass='$rehashed_password' WHERE user_name='$username'";
                    $result = mysqli_query($conn,$query);
                }
                //redirect to a success page
                header('location:index.php');
            }
            else {
                $_SESSION['message']='<p class="alert-danger">Invalid username or password</p>';
                header('location:index.php');
            }
        }
        else {
            //if there is no user of such redirect back to login page and display warning message
            $_SESSION['message']='<p class="alert-danger">Invalid username or password</p>';
            header('location:index.php');
        }
    }
?>

