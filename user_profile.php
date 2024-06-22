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
    <link rel="stylesheet" href="css/style.css">

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

    <!-- Footer section start -->
    <section class="footer">
        <div class="box-container">
            
            <div class="box">
                <h3>quick links</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="services.php"><i class="fas fa-angle-right"></i> services</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contacts info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-envelope"></i> cs@globeguides.com</a>
                <a href="#"><i class="fas fa-map"></i> Jakarta, Indonesia</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin-in"></i> linkedin</a>
            </div>
        </div>
    </section>
    <!-- Footer section end -->

    <!-- Login popup -->
    <div id="login-popup" class="login-popup">
        <span class="close-btn">&times;</span>
        <h2>Login</h2>
        <form id="login-form">
            <input type="text" name="username" placeholder="Username" required autocomplete="username">
            <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
            <input type="submit" value="Login">
        </form>
        <p id="login-error" style="color:red;"></p>
        <p id="signup-link">Not registered yet? <a href="#" id="signup-btn">Signup here</a></p>
    </div>

    <!-- Signup popup -->
    <div id="signup-popup" class="signup-popup">
        <span class="close-btn">&times;</span>
        <h2>Signup</h2>
        <form id="signup-form">
            <input type="text" name="fullname" placeholder="Full Name" required autocomplete="on">
            <input type="email" name="email" placeholder="Email" required autocomplete="on">
            <input type="text" name="username" placeholder="Username" required autocomplete="on">
            <input type="password" name="password" placeholder="Password" required autocomplete="on">
            <input type="submit" value="Signup">
        </form>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="overlay"></div>

    <!-- Swiper JS link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>

</body>
</html>