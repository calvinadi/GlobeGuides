<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeGuides - Travel & Tour</title>
    
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
                    <i class="fas fa-user-circle"></i> John Doe <!-- Ganti dengan nama user yang login -->
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
        <div class="container">
            <div class="profile-info">
                <div class="avatar">
                    <img src="images/avatar.jpg" alt="User Avatar">
                </div>
                <div class="details">
                    <h1>John Doe</h1>
                    <p><strong>Email:</strong> johndoe@example.com</p>
                    <p><strong>Phone:</strong> +1234567890</p>
                    <p><strong>Address:</strong> 123 Street, City, Country</p>
                    <p><strong>Joined Since:</strong> January 1, 2022</p>
                    <a href="#" class="edit-profile">Edit Profile</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile section end -->

<!-- Footer section -->
<?php include 'footer.php'; ?>

<!-- Swiper JS link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>