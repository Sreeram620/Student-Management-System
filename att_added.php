<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $roll = $_POST['roll'];
    $attendence = $_POST['atten'];
    $query = "UPDATE add_student SET attendance = '$attendence' WHERE roll_no = '$roll'";
    $res = mysqli_query($conn, $query);
    if($res){
        header("Location: att_added.html");
    }
    else{
        echo "Error!!!" . mysqli_error();
    }
}


?>