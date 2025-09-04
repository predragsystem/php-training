<?php
include('connection.php');
$action = ($_POST['action']) ? $_POST['action'] : 'NA';
switch($action){
    case 'add':
    $name = $_POST['firstName']." ".$_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sqlInsert = "INSERT INTO user(`name`,`email`,`password`) VALUES(?,?,?)";
    $stmt= $conn->prepare($sqlInsert)->execute([$name, $email, $password]);
    if($stmt){
        echo "record inserted";
    }
}