<?php
include('session.php');

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "collegevote2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Connected successfully";
}

$query = "SELECT * from students where email = '$login_session' AND status = 'voted'";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) > 0)
{
    $message = "YOU HAVE ALREADY VOTED.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    //echo '<script>alert("You have already voted:")</script>'; 
    header('location: home.php');  

}else
{
    
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "collegevote2";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {
        echo "Connected successfully";
    }  

if(isset($_POST['vote1'])){

    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 7;";
    header('location: candidates3.php');

}elseif($_POST['vote2'])
{
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 8 ;";
    header('location: candidates3.php');
}elseif($_POST['vote3'])
{
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 9;";
    header('location: candidates3.php');
}elseif($_POST['vote4']) {

    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 10;";
    header('location: candidates3.php');
    
}elseif($_POST['vote5']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 11;";
    header('location: candidates4.php');

}elseif ($_POST['vote6']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 12;";
    header('location: candidates4.php');

}elseif ($_POST['vote7']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 13;";
    header('location: candidates4.php');

}elseif ($_POST['vote8']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 14;";
    header('location: candidates5.php'); 
}elseif ($_POST['vote9']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 15;";
    header('location: candidates5.php');

}elseif ($_POST['vote10']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 16;";
    header('location: candidates5.php');
}elseif ($_POST['vote11']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 17;";
    header('location: candidates6.php');

}elseif($_POST['vote12']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 18;";
    header('location: candidates6.php');
}elseif($_POST['vote13']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 19;";
    header('location: candidates6.php');

}elseif($_POST['vote14']) {
    //$sql = "UPDATE students  SET status = 'voted' WHERE email = '$login_session';";
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 20;";
    header('location: candidates6.php');

}elseif($_POST['vote15']) {
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 21;";
    header('location: candidates6.php');
}elseif ($_POST['vote16']){
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 22;";
    header('location: candidates6.php');
}else {

    $sql = "UPDATE students  SET status = 'voted' WHERE email = '$login_session';"; 
    header('location: home.php');       
}     

        if ($conn->query($sql) === TRUE) {
                

            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

       
        
        $conn->close();
    }    
?>





