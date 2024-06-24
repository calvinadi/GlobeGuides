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
                <span>location & price :</span>
                <div class="location-price">
                    <select name="location" id="location" onchange="updatePrice()">
                        <option value="Place 1" data-price="1000000">Place 1 - Rp 1,000,000</option>
                        <option value="Place 2" data-price="2000000">Place 2 - Rp 2,000,000</option>
                        <option value="Place 3" data-price="3000000">Place 3 - Rp 3,000,000</option>
                        <option value="Place 4" data-price="4000000">Place 4 - Rp 4,000,000</option>
                        <option value="Place 5" data-price="5000000">Place 5 - Rp 5,000,000</option>
                        <option value="Place 6" data-price="6000000">Place 6 - Rp 6,000,000</option>
                        <option value="Place 7" data-price="7000000">Place 7 - Rp 7,000,000</option>
                        <option value="Place 8" data-price="8000000">Place 8 - Rp 8,000,000</option>
                    </select>
                </div>
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

<!-- Include login and signup popups -->
<?php include 'login_popup.php'; ?>
<?php include 'signup_popup.php'; ?>

<!-- Include overlay -->
<?php include 'overlay.php'; ?>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link-->
<script src="js/script.js"></script>

</body>

</html>
