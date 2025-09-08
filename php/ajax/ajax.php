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
            //echo "<div class='alert alert-success'>record inserted</div>";
             $json = [
            'status' => 'success',
            'message' => 'Data Inserted successfully!',
            ];
            
        } else {
           // echo "<div class='alert alert-danger'>record Not inserted</div>";
            $json = [
            'status' => 'failed',
            'message' => 'Data Not  Inserted!',
            ];
        }
        header('Content-Type: application/json');
        echo json_encode($json);
        break;
    
}