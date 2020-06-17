<?php
include('session.php');

$servername = "localhost";
$username = "username";
$pwd = "password";
$dbname = "collegevote2";

$conn = mysqli_connect($servername, $username, $pwd, $dbname);


$query = "SELECT * from students where email = '$login_session' AND status = 'voted'";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) > 0)
{
   // $message = "YOU HAVE ALREADY VOTED.";
    //echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<script>alert("You have already voted:")</script>'; 
    header('location: home.php');  
}else
{
    
}
   



?>