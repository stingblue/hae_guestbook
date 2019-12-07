<?php
    header("Content-Type: application/json; charset=UTF-8");
    include('db.php');

    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        //perform a query to check if there is such user
        $id = mysqli_real_escape_string($conn, strip_tags($_GET["id"]));
        $query = "SELECT * FROM feedbacks WHERE id=$id";
        $result = mysqli_query($conn,$query);
        $num_row = mysqli_num_rows($result);
        //if there is a user with collected details
        if($num_row == 1){
            $getData = mysqli_fetch_assoc($result);
            echo json_encode(array("success" => true, "data" => $getData));
        }
    } else{
        echo json_encode(array("success" => false, "message" => '<p class="alert-danger">Cannot read feedback!</p>'));
    }
?>