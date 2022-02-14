<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "dbstore";

  // Create a connection to database
  $conn = mysqli_connect($servername, $username, $password);
  if(!$conn) { // If connection to database failed, then stop PHP
    die("Connection failed" . mysqli_connect_error());
  }

  // Create a database if it does not exist
  // If it does exist then skip this part.
  $sql_db = "CREATE DATABASE IF NOT EXISTS " . $dbName;
  if (!mysqli_query($conn, $sql_db)){
    echo "Error creating database: " . mysqli_error($conn);
  } 

  // If the connection and the database creation is successful
  // Change our connection variable, set it to that database specifically.
  $conn = mysqli_connect($servername, $username, $password, $dbName);

  // Create a table if it does not exist
  // If it does exist then skip this part.
  $sql_tb = "CREATE TABLE IF NOT EXISTS product (pid INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, pName VARCHAR(20) NOT NULL,  pPrice VARCHAR(5), pDescription VARCHAR(120), pImage VARBINARY(10), pStock VARCHAR(5))";

  if(!mysqli_query($conn, $sql_tb)) {
    echo "Error creating table: " . mysqli_error($conn);
  } 

  mysqli_close($conn);

?>
