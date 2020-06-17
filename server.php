<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "collegevote"

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Connected successfully";
}


$createdb = "CREATE DATABASE IF NOT EXISTS collegevote";

// sql to create table
$candpsql = "CREATE TABLE IF NOT EXISTS Position (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    position_name VARCHAR(30) NOT NULL,
    department  VARCHAR(30) NOT NULL
    
    )";

// sql to create table
$candsql = "CREATE TABLE IF NOT EXISTS Candidate (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30),
    student_id VARCHAR(30),
    `image` longblob NOT NULL,
    position_name VARCHAR(30),
    
    
    )";
 
$votsql = "CREATE TABLE IF NOT EXISTS Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(30) NOT NULL PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30),
    course_id VARCHAR(30)
)";

$votessql = "CREATE TABLE IF NOT EXISTS Votes (
    vote_id VARCHAR(30) NOT NULL PRIMARY KEY,
    student_id VARCHAR(30),
    candidate_id VARCHAR(30),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)"; 


$depsql = "CREATE TABLE IF NOT EXISTS Department (
    department_id VARCHAR(30) NOT NULL PRIMARY KEY,
    department_name VARCHAR(30)
)";

if(isset($_POST['add_detail']))
{
  $email = $_POST['email'];
  $password = $_POST['password1'];
  $query = "SELECT * FROM login WHERE email ='$email' AND password ='$password'";
  $query_run = mysqli_query($conn, $query);

  if(mysqli_num_rows($query_run)>0)
  {
    $_SESSION['email']= $email;
    header('location: home.html');
  }else
  {
    echo("INVALID EMAIL OR PASSWORD");
  }
}

?>
    