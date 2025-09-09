<?php
include('connection.php');
$action = ($_REQUEST['action']) ? $_REQUEST['action'] : 'NA';
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

    case 'view':
        $sqlView = "SELECT * FROM user";
        $stmt= $conn->query($sqlView);
        $users = $stmt->fetchAll();
        if($users){
            $html = "";
            foreach ($users as $user) {
                $html .="<tr><td>".$user['name']."</td><td>".$user['email']."</td></tr>";
            }
            $json = [
                'status' => 'success',
                'data' => $html 
               ,
            ];
        }

         header('Content-Type: application/json');
        echo json_encode($json);
}