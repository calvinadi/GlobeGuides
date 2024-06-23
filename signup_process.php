<?php
header('Content-Type: application/json');

error_reporting(0);
ini_set('display_errors', 0);

try{
    // Hubungkan ke database
    require_once 'db_connect.php';

    // Ambil data yang dikirim dari JavaScript
    $data = json_decode(file_get_contents('php://input'), true);

    // Validasi data
    if (empty($data['username']) || empty($data['email']) || empty($data['password'])) {
        echo json_encode(['success' => false, 'message' => 'Semua field harus diisi']);
        exit;
    }

    $username = $conn->real_escape_string($data['username']);
    $email = $conn->real_escape_string($data['email']);
    $password = password_hash($data['password'], PASSWORD_DEFAULT); // Enkripsi password

    // Cek apakah username atau email sudah ada
    $check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Username atau email sudah terdaftar']);
        exit;
    }

    // Jika tidak ada, lakukan insert ke tabel users
    $insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($insert_query) === TRUE) {
        // Ambil id user yang baru dibuat
        $user_id = $conn->insert_id;
        
        // Mulai sesi dan set user_id
        session_start();
        $_SESSION['user_id'] = $user_id;
        
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Gagal mendaftar: ' . $conn->error]);
    }
 
}catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    exit;
}

$conn->close();
?>