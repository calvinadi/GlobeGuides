<?php
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeGuides - User Profile</title>
    
    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a href="index.php" class="logo">GlobeGuides</a>
        
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="services.php">services</a>
            <a href="book.php">book</a>
            <div class="dropdown">
                <button class="profile-btn" id="profile-btn">
                    <i class="fas fa-user-circle"></i> John Doe
                </button>
                <div class="dropdown-content" id="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="#">Settings</a>
                    <a href="#" id="logout-btn">Logout</a>
                </div>
            </div>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->

    <!-- Profile section start -->
    <section class="profile">
        <h1 class="heading-title">User Profile</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="<?php echo display_if_set($user['profile_picture']) ?: 'images/default-avatar.jpg'; ?>" alt="User Avatar">
                </div>
                <div class="content">
                    <h3><?php echo display_if_set($user['username']); ?></h3>
                    <p><i class="fas fa-envelope"></i> <?php echo display_if_set($user['email']); ?></p>
                    <p><i class="fas fa-phone"></i> <?php echo display_if_set($user['phone_number']); ?></p>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo display_if_set($user['address']); ?></p>
                    <p><i class="fas fa-calendar-alt"></i> Joined Since: <?php echo display_if_set($user['created_at']); ?></p>
                    <p><i class="fas fa-passport"></i> Passport No: <?php echo display_if_set($user['passport_number']); ?></p>
                    <p><i class="fas fa-language"></i> Languages: <?php echo display_if_set($user['languages']); ?></p>
                    <p><i class="fas fa-heart"></i> Travel Preferences: <?php echo display_if_set($user['travel_preferences']); ?></p>
                    <a href="edit_profile.php" class="btn">Edit Profile</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile section end -->

<!--footer section  -->
<?php include 'footer.php'; ?>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link-->
<script src="js/script.js"></script>


</body>
</html>