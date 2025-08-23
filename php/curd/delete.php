<?php 
include('connection.php');
if(isset($_GET['id'])){
    $userid = $_GET['id'];

    //Hard Delete
    //$sqlhardDel = "DELETE FROm user WHERE id=$userid";

    //SoftDelete
    $sqlSoftDel = "UPDATE user SET isDelete = 1 WHERE id=$userid";
     if(mysqli_query($connection, $sqlSoftDel)){
        echo "User Delete Successfully";
       // header("Location:index.php");
       echo "<a href='index.php'>GO TO HOME</a>";
    } else {
        echo "Something wrong".mysqli_error($connection);
    }
}