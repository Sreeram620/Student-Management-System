<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $roll = $_POST['roll_no'];
    $depart = $_POST['options'];
    $phone = $_POST['ph_no'];
    $dob = $_POST['dob'];
    $roll_no = $_POST['roll'];
    $query = "UPDATE add_student SET std_name = '$name', f_name='$fname', roll_no = '$roll', depart='$depart' , dob = '$dob' where roll_no ='$roll_no' ";
    $res = mysqli_query($conn, $query);
    if($res){
        header("Location: update_success.html");
    }
    else{
        echo "Error While Updating The Details";
    }
}

?>