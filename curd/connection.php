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

