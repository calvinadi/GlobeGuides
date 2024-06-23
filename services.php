<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    
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
    <h1>Services</h1>
</div>

<!-- package section start  -->

<section class="packages">
    <h1 class="heading-title">top destination</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/package-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur libero veritatis, numquam doloremque voluptas repellendus natus quod excepturi totam!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>package2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur libero veritatis, numquam doloremque voluptas repellendus natus quod excepturi totam!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>package3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur libero veritatis, numquam doloremque voluptas repellendus natus quod excepturi totam!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>package4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur libero veritatis, numquam doloremque voluptas repellendus natus quod excepturi totam!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>package5</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur libero veritatis, numquam doloremque voluptas repellendus natus quod excepturi totam!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>package6</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur libero veritatis, numquam doloremque voluptas repellendus natus quod excepturi totam!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package-7.jpg" alt="">
            </div>
            <div class="content">
                <h3>package7</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur libero veritatis, numquam doloremque voluptas repellendus natus quod excepturi totam!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package-8.jpg" alt="">
            </div>
            <div class="content">
                <h3>package8</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur libero veritatis, numquam doloremque voluptas repellendus natus quod excepturi totam!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>

    <div class="load-more">
        <span class="btn">load more</span>
    </div>
</section>

<!-- package section end  -->

<!-- Include login and signup popups -->
<?php include 'login_popup.php'; ?>
<?php include 'signup_popup.php'; ?>

<!-- Include overlay -->
<?php include 'overlay.php'; ?>

<!-- Footer section -->
<?php include 'footer.php'; ?>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link-->
<script src="js/script.js"></script>

<!-- Swiper JS slider-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>
