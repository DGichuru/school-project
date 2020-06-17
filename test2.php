<?php
include  "candidates2.php";
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
      
if($_POST['vote1']){

    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 7;";
        
}elseif($_POST['vote2'])
{
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 8 ;";

}elseif($_POST['vote3'])
{
    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 9;";
}else {

    $sql = "UPDATE candidates SET vote = vote + 1  WHERE candidateid = 10;";
    
   
}    

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }

            header('location: candidates3.php');
            
            $conn->close();
            
        
        
           
  
?>