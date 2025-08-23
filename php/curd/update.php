<?php 
include('connection.php');
if(isset($_POST['id'])){
    $userid = $_POST['id'];
    $name = $_POST['firstName'];
    $email = $_POST['email'];

    $sqlUpdate ="UPDATE user SET name= '$name' , email='$email' 
                WHERE id = $userid";
     if(mysqli_query($connection, $sqlUpdate)){
        echo "User Updated Successfully";
        header("Location:index.php");
    } else {
        echo "Something wrong".mysqli_error($connection);
    }
}