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
    <a href="index.php" class="logo">GlobeGuides</a>
    
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="services.php">services</a>
        <a href="book.php">book</a>
        <a href="#" id="login-link">login</a>
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
    <div class="row">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Odit sapiente accusamus atque! Maxime animi, 
                debitis perspiciatis minus beatae dicta repellat tempora dolorem dolor at, 
                libero quam sequi repellendus recusandae aut.
            </p>
            <div class="btn-container">
                <a href="about.php" class="btn">read more</a>
            </div>
        </div>
    </div>
</section>

<!-- home about section end -->

<!-- home booking section start -->

<section class="home-book">
    <h1 class="heading-title">top packages</h1>

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

<!-- Include login and signup popups -->
<?php include 'login_popup.php'; ?>

<?php include 'signup_popup.php'; ?>

<!--footer section  -->
<?php include 'footer.php'; ?>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link-->
<script src="js/script.js"></script>

</body>

</html>
