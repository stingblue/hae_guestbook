<?php
    header("Content-Type: application/json; charset=UTF-8");
    include('db.php');

    $id = mysqli_real_escape_string($conn, strip_tags($_POST["id"]));

    $sql = "DELETE FROM feedbacks WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("success" => true, "message" => '<p class="alert alert-success">Thank you! Your message has been deleted</p>'));
    } else {
        echo json_encode(array("success" => false, "message" => '<p class="alert-danger">Cannot delete message</p>'));
    }
    $conn->close();
?>