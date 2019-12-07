<?php
    header("Content-Type: application/json; charset=UTF-8");
    include('db.php');
  
    $guest_name = mysqli_real_escape_string($conn, strip_tags($_POST["guest-name"]));
    $id = mysqli_real_escape_string($conn, strip_tags($_POST["id"]));
    $feedback_content = mysqli_real_escape_string($conn, strip_tags($_POST["msg"]));

    $sql = "UPDATE feedbacks SET guest_name = '$guest_name', feedback_content = '$feedback_content' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("success" => true, "message" => '<p class="alert alert-success">Thank you! Your message has been updated</p>'));
    } else {
        echo json_encode(array("success" => false, "message" => '<p class="alert-danger">Cannot update message</p>'));
    }
    $conn->close();
?>