<?php
session_start();
require_once('db_connect.php');

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $pwd = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (full_name, email, username, pwd) VALUES ('$full_name', '$email', '$username', '$pwd')";

    if (mysqli_query($connection, $sql)) {
        $response['status'] = 'success';
        echo json_encode($response);
        exit();
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Database error: ' . mysqli_error($connection);
        echo json_encode($response);
        exit();
    }
}

mysqli_close($connection);
?>
