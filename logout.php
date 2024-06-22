<?php
session_start();
session_unset(); // Hapus semua variabel sesi
session_destroy(); // Hapus sesi

header("Location: index.php"); // Redirect ke halaman awal setelah logout
exit();
?>
