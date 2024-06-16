<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobeGuides - Travel & Tour</title>
    
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
    <a href="home.php" class="logo">GlobeGuides</a>
    
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="services.php">services</a>
        <a href="book.php">book</a>
        <a href="contact.php">contact</a>
        <a href="#" id="login-link">login</a>
        <a href="signup.php">signup</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section end -->

<!-- home section start -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new place</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worth</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</section>

<!-- home section end -->

<!-- services section start -->

<section class="services">

    <h1 class="heading-title">our services</h1>

    <div class="box-container">
        <div class="box">
            <img src="images/destinasi-icon.jpg" alt="Destination" class="service-icon">
            <h3>Destinasi Terpopuler</h3>
        </div>

        <div class="box">
            <img src="images/akomodasi-icon.jpg" alt="Akomodasi" class="service-icon">
            <h3>Akomodasi</h3>
        </div>

        <div class="box">
            <img src="images/wisata-icon.jpg" alt="Attraction" class="service-icon">
            <h3>Atraksi Wisata</h3>
        </div>

        <div class="box">
            <img src="images/tour-guide-icon.jpg" alt="Tour Guide" class="service-icon">
            <h3>Tur Guide Langsung</h3>
        </div>

        <div class="box">
            <img src="images/rekomendasi-icon.jpg" alt="Recommendation" class="service-icon">
            <h3>Rekomendasi Kustom</h3>
        </div>

        <div class="box">
            <img src="images/review-icon.jpg" alt="Review" class="service-icon">
            <h3>Ulasan dan Rating</h3>
        </div>

        <div class="box">
            <img src="images/pemesanan-icon.jpg" alt="Order" class="service-icon">
            <h3>Pemesanan Online</h3>
        </div>
    </div>

</section>


<!-- services section end -->

<!-- home about section start -->

<section class="home-about">
    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Odit sapiente accusamus atque! Maxime animi, 
            debitis perspiciatis minus beatae dicta repellat tempora dolorem dolor at, 
            libero quam sequi repellendus recusandae aut.
        </p>
        <a href="about.php" class="btn">read more</a>
    </div>

</section>

<!-- home about section end -->

<!-- home booking section start -->

<section class="home-book">
    <h1 class="heading-title">some of our packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/booking-1.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/booking-2.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/booking-3.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>


</section>

<!-- home booking section end -->

<!-- home offer section start -->

<section class="home-offer">
    <div class="content">
        <h3>up to 50% off for new customers</h3>
        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, tempore voluptatem laboriosam illo ullam ipsam sint possimus? Minima autem similique sint necessitatibus, quod quia! Recusandae corrupti ullam in totam quisquam?</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home offer section end -->

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
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="services.php"><i class="fas fa-angle-right"></i>services</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            <a href="contact.php"><i class="fas fa-angle-right"></i>contact</a>
            <a href="login.php"><i class="fas fa-angle-right"></i>login</a>
            <a href="signup.php"><i class="fas fa-angle-right"></i>signup</a>
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
