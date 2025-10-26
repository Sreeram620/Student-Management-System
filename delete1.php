<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $roll = $_POST['rollno'];
    $query = "DELETE FROM add_student WHERE roll_no = '$roll'";
    $res = mysqli_query($conn, $query);
    if($res){
        header("Location: deleted.html");
    }
    else{
        echo "Error!!! while Deleting the Student";
    }
}

?>