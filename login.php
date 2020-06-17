
<?php

session_start();

$servername = "localhost";
$username = "username";
$pwd = "password";
$dbname = "collegevote2";

$conn = mysqli_connect($servername, $username, $pwd, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

            
              
            if(isset($_POST['add_detail']))
            {
              $email = $_POST['email'];
              $pass = $_POST['pass'];
              $query = "SELECT * FROM students WHERE email ='$email' AND pass ='$pass'";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run)>0)
              {
                
                
               $_SESSION['login_user'] = $email;

              header('location: home.php'); 

              }else
              {
                $emailadmin = $_POST['email'];
                $pass = $_POST['pass'];
                $query = "SELECT * FROM admin WHERE emailadmin ='$email' AND pass ='$pass'";
                $query_run2 = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run2)>0)
              {
                $_SESSION['email']= $email;
                header('location: admin.php');
              }else
              {
                //echo "WRONG EMAIL OR PASSWORD";
                $message = "Username and/or Password incorrect.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
              
              }
                
              }
            }else 
               //echo "WRONG EMAIL OR PASSWORD";
               $message = "Username and/or Password incorrect.\\nTry again.";
               echo "<script type='text/javascript'>alert('$message');</script>";

            ?>