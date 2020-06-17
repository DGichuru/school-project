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

$button2 =
            '
            <form action="test2.php" method="post">
            
            <input type="submit" id="submit" name="vote2" 
           
             value="Vote"></button>
            
            </form>'
           
?>


<!DOCTYPE html>

<head>
  <title>Candidates</title>
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
                      <h2>ChairPerson Candidates</h2>
<table width = 100%>
  <tr>
   <td valign ="top">
    <table style="width:60%" >
        <tr>
            <th>Image</th>
            <th>Student ID</th>
            <th>Department </th>
            <th>First Name</th>
            <th>Last Name</th>
            
        </tr>

        <?php
	    $db=mysqli_connect('localhost','root','','collegevote2'); 
		$fetch=mysqli_query($db,"SELECT * FROM candidates WHERE positionid = 101");
        while ($row=mysqli_fetch_assoc($fetch) ) 
        
        {
            $image = $row['image'];
            $studentid = $row['studentid'];
            $department = $row['department'];  
            $fname = $row['fname'];
            $lname = $row['lname'];
            $button1 =
            '
            <form action="test2.php" method="post">
            
            <input type="submit" id="submit" name="vote1" 
           
             value="Vote"></button>
            
            </form>'

            
            
            ?>
            
        

			<tr>
                
                <td><?php echo '<img  src = "'.$image.'" width="70px;" height="70px"; alt="product_image">'?></td>
                <td><?php echo $studentid ?> </td>
                <td><?php echo $department ?></td>
                <td><?php echo $fname ?></td>       
                <td><?php echo $lname ?></td>
            
                    
            </tr>		
            <?php    
        }
        ?>
        </table>
    </td>
    <td valign="top">
        <table style="width:20%">
        <tr>
            <th>Vote For Your Candidate</th>
        </tr>
	    <tr>
          <td height = 110px><?php echo '
            <form action="test2.php" method="post">
            
            <input type="submit" id="submit" name="vote1" 
           
             value="Vote"></button>
            
            </form>' ?></td>
        </tr> 
        <tr>
          <td height = 120px><?php echo $button2 ?></td>
        </tr>
        <tr>
          <td height = 120px><?php echo  '
            <form action="test2.php" method="post">
            
            <input type="submit" id="submit" name="vote3" 
           
             value="Vote"></button>
            
            </form>' ?></td>
        </tr>
        <tr>
          <td height = 120px><?php echo  '
            <form action="test2.php" method="post">
            
            <input type="submit" id="submit" name="vote4" 
           
             value="Vote"></button>
            
            </form>' ?></td>
        </tr> 

            
		
        
    </table>
    </td>
   </tr> 
  </table>  
    </div>
    </div>
  </div>
</body>
</html>
</html>