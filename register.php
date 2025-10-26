<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['userid'];
    $pwd = $_POST['password'];
    $confirm_pwd = $_POST['confirm_password'];
    if ($pwd !== $confirm_pwd) {
            echo "Passwords do not match!";
            exit;
        }

        $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $query = "INSERT INTO std_reg (user_id, pass) VALUES ('$id', '$hashed_pwd')";
        if (mysqli_query($conn, $query)) {
            header("Location: registered.html");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } 
    else {
        echo "Please fill in all required fields.";
    }


mysqli_close($conn);

?>