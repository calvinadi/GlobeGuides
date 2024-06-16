<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    
    <!-- swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link -->
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
        <a href="contact.php">contact</a>
        <a href="#" id="login-link">login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section end -->

<div class="heading" style="background:url(images/header-bg.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<!-- booking section start -->

<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
    
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your phone number" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
                <span>arrivals date :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>leaving date :</span>
                <input type="date" name="leaving">
            </div>

            <input type="submit" value="submit" class="btn" name="send">
        </div>

    </form>
</section>

<!-- booking section end -->

<!-- login popup -->
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

<!-- signup popup -->
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


    
<!--footer section start -->

<section class="footer">
    <div class="box-container">
        
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="services.php"><i class="fas fa-angle-right"></i>services</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            <a href="contact.php"><i class="fas fa-angle-right"></i>contact</a>
            <a href="#" id="login-link"><i class="fas fa-angle-right"></i>login</a>
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

<!--footer section end -->

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link-->
<script src="js/script.js"></script>

</body>

</html>
