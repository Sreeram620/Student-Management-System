<?php

$servername = "localhost";
$username = "root";
$pwd = "Sreeram@123";
$dbname = "student_management";

$conn = mysqli_connect($servername, $username, $pwd, $dbname);

if(!$conn){
    die("Error !!!" . mysqli_connect_error());
}

?>