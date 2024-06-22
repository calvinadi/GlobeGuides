<?php

    $connection = mysqli_connect('localhost','root','','globe_guides');

    if(isset($_POST['send'])){
        $full_name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone'];
        $address = $_POST['address'];
        $destination = $_POST['location'];
        $num_travelers = $_POST['guests'];
        $departure_date = $_POST['arrivals'];
        $return_date = $_POST['leaving'];

    $request = "insert into book_form(name,email,phone,
    address,location,guests,arrivals,leaving) values(
    '$full_name','$email','$phone_number','$address','$destination','$num_travelers',
    $'departure_date','$return_date')";

    mysqli_query($connection, $request);

    header('location:book.php');
    } else{
        echo 'something went wrong, try again!';
    }   


?>    