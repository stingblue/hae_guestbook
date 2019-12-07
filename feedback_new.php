<?php
    header("Content-Type: application/json; charset=UTF-8");
    include('db.php');

    $guest_name = mysqli_real_escape_string($conn, strip_tags($_POST["guest-name"]));
    $guest_email = mysqli_real_escape_string($conn, strip_tags($_POST["guest-email"]));
    $feedback_content = mysqli_real_escape_string($conn, strip_tags($_POST["msg"]));

    $sql = "INSERT INTO feedbacks(guest_name, guest_email, feedback_content, date_created) VALUES ('$guest_name', '$guest_email', '$feedback_content', null)";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("success" => true, "message" => '<p class="alert alert-success">Thank you! Your message has been sent successfully</p>'));
    } else {
        echo json_encode(array("success" => false, "message" => '<p class="alert-danger">Cannot save message</p>'));
    }
    $conn->close();
?>