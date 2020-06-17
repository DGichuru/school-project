<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$servername = "localhost";
$username = "username";
$pwd = "password";
$dbname = "collegevote2";

$conn = mysqli_connect($servername, $username, $pwd, $dbname);

session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from students where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>

 



