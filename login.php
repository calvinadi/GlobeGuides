<?php
session_start();
require_once('db_connect.php');

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['user_id']; // Store user_id in session
                $_SESSION['username'] = $username;
                $response['status'] = 'success';
                echo json_encode($response);
                exit();
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Invalid password';
                echo json_encode($response);
                exit();
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'User not found';
            echo json_encode($response);
            exit();
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Database error: ' . mysqli_error($connection);
        echo json_encode($response);
        exit();
    }
}

mysqli_close($connection);
?>
