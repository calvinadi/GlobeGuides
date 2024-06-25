<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/path/to/error.log');

session_start();
require_once 'db_connect.php';

$response = ['success' => false, 'message' => 'An unknown error occurred']; 

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Check if all required fields are set
        if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirm_password'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            // Check if passwords match
            if ($password !== $confirmPassword) {
                $response = ['success' => false, 'message' => 'Password tidak cocok'];
            } else {
                // Check if username or email already exists
                $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
                $stmt->execute(['username' => $username, 'email' => $email]);
                
                if ($stmt->rowCount() > 0) {
                    $response = ['success' => false, 'message' => 'Username atau email sudah terdaftar'];
                } else {
                    // Hash password
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    // Insert new user into database
                    $stmt = $pdo->prepare("INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd)");
                    
                    if ($stmt->execute(['username' => $username, 'email' => $email, 'pwd' => $hashedPassword])) {
                        // Set session variables upon successful registration
                        $user_id = $pdo->lastInsertId();
                        $_SESSION['user_id'] = $user_id;
                        $_SESSION['username'] = $username;

                        // Redirect to user profile page
                        header('Location: ../user_profile.php');
                        exit; // Ensure no further execution
                    } else {
                        $response = ['success' => false, 'message' => 'Terjadi kesalahan saat mendaftar'];
                    }
                }
            }
        } else {
            $response = ['success' => false, 'message' => 'Semua field harus diisi'];
        }
    } else {
        $response = ['success' => false, 'message' => 'Invalid request method'];
    }
} catch (Exception $e) {
    error_log('Signup error: ' . $e->getMessage());
    $response = ['success' => false, 'message' => 'Terjadi kesalahan internal'];
}

// Only send JSON response if we haven't redirected
header('Content-Type: application/json');
echo json_encode($response);