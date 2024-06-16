<?php
session_start();

// Koneksi ke basis data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "globe_guides";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangani data dari form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Mencegah SQL Injection
    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);

    // Periksa apakah pengguna ada di basis data
    $sql = "SELECT * FROM users WHERE username = '$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ambil data pengguna
        $row = $result->fetch_assoc();
        // Verifikasi kata sandi
        if (password_verify($pass, $row['password'])) {
            // Set session dan arahkan ke halaman beranda
            $_SESSION['username'] = $user;
            header("Location: home.php");
            exit();
        } else {
            // Jika kata sandi salah
            $error = "Kata sandi salah.";
        }
    } else {
        // Jika pengguna tidak ditemukan
        $error = "Pengguna tidak ditemukan.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GlobeGuides</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        if (isset($error)) {
            echo "<p style='color:red;'>$error</p>";
        }
        ?>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
