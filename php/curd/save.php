<?php 
include('connection.php');
if(!empty($_POST)){
    $name = $_POST['firstName'];
    $email = $_POST['email'];
    //Validation
    $checkExist = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($connection,$checkExist);
    if(mysqli_num_rows($result) > 0){
        die("Record Already Exist");
    }

    $sqlInsert = "INSERT INTO user(`name`,`email`) VALUES('$name', '$email')";
    if(mysqli_query($connection, $sqlInsert)){
        echo "User Created Successfully";
        header("Location:index.php");
    } else {
        echo "Something wrong".mysqli_error($connection);
    }
} else {
    echo "Request Not Valid";
}