<?php
// user_data.php

session_start();
require_once 'php/db_connect.php';

$username = $_SESSION['username'];

// Query untuk mengambil data user
try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}

// Fungsi untuk menampilkan nilai jika ada, atau string kosong jika tidak ada
function display_if_set($value) {
    return isset($value) ? htmlspecialchars($value) : '';
}