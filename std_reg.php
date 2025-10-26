<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd = $_POST['password'];
    $confirm_pwd = $_POST['confirm_password'];
    if ($pwd !== $confirm_pwd) {
            echo "Passwords do not match!";
            exit;
        }

        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $query = "INSERT INTO user_details (name, email, ph_no, user_pass) VALUES ('$name', '$email', '$phone', '$hashed_pwd')";
        if (mysqli_query($conn, $query)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } 
    else {
        echo "Please fill in all required fields.";
    }


mysqli_close($conn);

?>