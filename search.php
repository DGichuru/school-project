<?php

$button = $_POST ['submit'];
$search = $_POST ['mess_username'];

if (!$button) {
    echo "you didn't submit a keyword";
}
else {
    if (strlen($search) <= 1) {
        echo "Search term too short";
    }
    else {
        echo "You searched for <b> $search </b> <hr size='1' >";
    }
}

$servername = "localhost";
$username = "username";
$pwd = "password";
$dbname = "collegevote2";

$conn = mysqli_connect($servername, $username, $pwd, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else {
    echo "Connected successfully";
}


$sql = " SELECT * FROM students WHERE studentid= '$search' ";
$run = mysqli_query($conn,$sql);

$foundnum = mysqli_num_rows($run);

if ($foundnum == 0) {
    echo "Sorry, there are no matching result for <b> $search </b>";
}
else {
    echo "$foundnum results found !<p>";

    while ($runrows = mysqli_fetch_assoc($run)) {
        $mess_username = $runrows ['studentid'];
        $fname = $runrows ['fname'];
        $mname = $runrows ['mname'];
        $course      = $runrows['course'];

        echo " $mess_username  <br> $fname <br> $mname <br> $course ";
    }
}


?>
<!DOCTYPE html>
<head>
  <title>Voting Day</title>
  <link href="css/admin.css" rel="stylesheet" type="text/css">
  </head>
<h2>Add Candidate Details</h2>
                        <form class="reg-form" action="cand.php" method="POST">
                                
                                <input required type="text" name="studentid" id="" placeholder="StudentsID"><br>
                                <input required type="text" name="positionid" id="" placeholder="Positionid"><br>
                                <input required type="text" name="department" id="" placeholder="Department"><br>
                                <input required type="text" name="fname" id="" placeholder="First Name">   <br>
                                <input required type="text" name="lname" id="" placeholder="Last Name">   <br>
                                <input type="text"name="image"  placeholder="Image Path" >  <br>
                                
                                    
                                    </select><br>
                                    <button type="submit" name="add_cand" >Add Candidate</button> 
                                    <button type="reset" name="add_cand">Clear</button> 

                        </form>

</html>