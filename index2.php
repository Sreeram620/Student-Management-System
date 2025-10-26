<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['userid'];
    $pass = $_POST['pwd'];

    $sql = "SELECT * FROM std_reg WHERE user_id = '$user' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['pass'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['login_user'] = $user;
            header("Location: std_login.html"); 
            exit();
        } else {
            $error = "Invalid email or password!";
        }
    } else {
        $error = "Invalid email or password!";
    }
} else {
    $error = "Invalid request method.";
}
?>