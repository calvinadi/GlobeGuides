<?php
$connection = mysqli_connect('localhost', 'root', '', 'globe_guides');

if (!$connection) {
    die('Connection error: ' . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $full_name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone_number = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $destination = mysqli_real_escape_string($connection, $_POST['location']);
    $num_travelers = mysqli_real_escape_string($connection, $_POST['guests']);
    $departure_date = mysqli_real_escape_string($connection, $_POST['arrivals']);
    $return_date = mysqli_real_escape_string($connection, $_POST['leaving']);

    // You can calculate the total_amount based on your business logic
    $total_amount = 0.0; // Placeholder, update with actual calculation

    // Assuming user_id is NULL for not logged-in users, otherwise fetch the logged-in user's ID
    $user_id = NULL; // Replace this with actual user ID if logged in

    $request = "INSERT INTO book_form (user_id, full_name, email, phone_number, address, destination, departure_date, return_date, num_travelers, total_amount) 
                VALUES ('$user_id', '$full_name', '$email', '$phone_number', '$address', '$destination', '$departure_date', '$return_date', '$num_travelers', '$total_amount')";

    if (mysqli_query($connection, $request)) {
        header('Location: book.php');
        exit;
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }
} else {
    echo 'Something went wrong, try again!';
}

mysqli_close($connection);
?>