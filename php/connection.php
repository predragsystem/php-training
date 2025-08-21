<?php 
const HOST = "localhost"; // define("HOST", "localhost)
const USERNAME = "root";
const PASSWORD = "";
const DBNAME = "practice";

//1. Create Connetion with mysql
/*$connection = mysqli_connect( HOST, 
USERNAME,
PASSWORD,
DBNAME);*/

$connection = new mysqli(
    HOST, 
USERNAME,
PASSWORD,
DBNAME);
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";

$sql ="CREATE TABLE user(
        id int AUTO_INCREMENT PRIMARY KEY,
        name varchar(255) NOT NULL,
        email varchar(50) NOT NULL
        )";

if($connection->query($sql) == true){
    echo "Table created successfully";
    
} else {
    echo "Something wrong :".$connection->error;
}

$connection->close();