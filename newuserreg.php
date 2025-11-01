<?php
$conn = mysqli_connect("localhost", "root", "Sreeram@123", "new_user");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['confirm_password'])) {
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
        $sql = "INSERT INTO users_details (name, email, ph_no, user_pass) VALUES ('$name', '$email', '$phone', '$hashed_pwd')";
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } 
    else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Invalid request method.";
}

mysqli_close($conn);
?>
