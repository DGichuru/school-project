<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "collegevote2";

$con = mysqli_connect($servername, $username, $password,$dbname);
// Create connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}else {
    echo "";

}
?>

<!DOCTYPE html>

<head>
  <title>Results</title>
  <!--<script src="js/script2.js"></script>-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script href="js/script2.js" rel="stylesheet" type="text/css"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  
</head>
<body>

  <div class="topnav">
    <a class="active" href="home.html">Home </a>
    <a href="candidates2.php">Vote</a>
    <a href="">Department</a>
    <a href="results.php">Results</a>
    
    <div class="topnav-right">
      <a href = "logout.php" >Log out
      </a>
    </div>
  </div>
  
  
  <div class="sidebar">
    
    <div class="sidenav">
      <a href="#">Voting Process</a>
      <a href="#">School Journal</a>
      <a href="#">Constitution</a>
      <a href="#">Contact</a>
    </div>
  </div>

  <div class="content">
  <div class="main">
                      <h2>Results</h2>

                      <h2>Leading Candidates</h2>
            <table>
        <tr>
            <th>Image</th>
            <th>Student ID</th>
            <th>Department</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Votes</th>
        </tr>

        <?php
	    $db=mysqli_connect('localhost','root','','collegevote2'); 
		$fetch=mysqli_query($db,"SELECT positionid, MAX(vote) FROM candidates GROUP BY positionid");
		while ($row=mysqli_fetch_assoc($fetch)) {
			extract($row);
			echo "
			<tr>
                    <td>$image</td>
                    <td>$studentid</td>
                    <td>$department</td>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$image</td>
                </tr>		
			";
	
		}
		?>
        
    </table>

  </div>
  </div>

  </html>