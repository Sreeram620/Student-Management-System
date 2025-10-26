<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $roll = $_POST['roll_no'];
    $depart = $_POST['options'];
    $phone = $_POST['ph_no'];
    $dob = $_POST['dob'];
    $lecid = $_POST['lec'];

    $query = "INSERT INTO add_student(std_name, f_name,roll_no,depart,phone_no,dob,teacher_id) VALUES ('$name','$fname','$roll','$depart','$phone','$dob','$lecid')";

    $res = mysqli_query($conn, $query);
    if($res){
        header("Location: added_man.html");
    }
    else{
        header("Location: not_added.html");
    }

}

?>