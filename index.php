<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: home.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, intial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" type="text/css">

<title>Login</title>
</head>
<body>
<h1> Your Vote Your Choice </h1><br />

<div id="a">
    <img src="images/images.jpg"></img>
  </div>
 </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
            <form action="login.php" method="POST"  class="form-horizontal" id="loginform"><br />
              <div class="form-group">
                <label class="control-label col-sm-1" for="email"></label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                  <div class="error_form" id="email_error_message"></div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="pwd"></label>
                <div class="col-sm-10"> 
                  <input type="password" class="form-control" name="pass" id="password" placeholder="Enter password">
                  <div class="error_form" id="password_error_message"></div>
                </div>
              </div>
             
              <div class="form-group"> 
                <div class="col-sm-offset-1 col-sm-10">
                  <button type="submit" onClick="login.php ='home.html'" name="add_detail" class="btn" >Log In
                </button></div>
              </div>
            </form>

		</div>
	</div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="js/loginvalidation.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jqueryValidation.js"></script>

</body>
</html>
