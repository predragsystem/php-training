<?php 
const HOST = "localhost"; // define("HOST", "localhost)
const USERNAME = "root";
const PASSWORD = "";
const DBNAME = "practice";

try {
  $conn = new PDO("mysql:host=localhost;dbname=practice", username: USERNAME, password: PASSWORD);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
