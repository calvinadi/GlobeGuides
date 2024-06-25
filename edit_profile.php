<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - GlobeGuides</title>
    
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

    <section class="edit-profile">
        <h1 class="heading-title">Edit Profile</h1>
        <form action="update_profile.php" method="post" enctype="multipart/form-data" class="edit-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" name="name" value="John Doe" required>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" value="johndoe@example.com" required>
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="tel" name="phone" value="+1234567890" required>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" name="address" value="123 Street, City, Country" required>
                </div>
                <div class="inputBox">
                    <span>Passport Number :</span>
                    <input type="text" name="passport" value="AB1234567" required>
                </div>
                <div class="inputBox">
                    <span>Languages :</span>
                    <input type="text" name="languages" value="English, Spanish" required>
                </div>
                <div class="inputBox">
                    <span>Travel Preferences :</span>
                    <input type="text" name="preferences" value="Adventure, Cultural" required>
                </div>
                <div class="inputBox">
                    <span>Profile Picture :</span>
                    <input type="file" name="profile_picture" accept="image/*">
                </div>
            </div>
            <input type="submit" value="Update Profile" class="btn" name="submit">
        </form>
    </section>

    <!-- Footer section -->
    <?php include 'footer.php'; ?>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>
</body>
</html>