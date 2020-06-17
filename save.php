<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM candidates");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
$result = mysqli_query($conn,"SELECT * FROM candidates");
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Candidate ID</td>
    <td>Student ID</td>
    <td>Department</td>
    <td>fname</td>
    <td>lname</td>
    <td>image</td>
    <td>Votes</td>
  </tr>
<?php
$i=0;
$result = mysqli_query($conn,"SELECT * FROM candidates");
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["candidateid"]; ?></td>
    <td><?php echo $row["studentid"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["lname"]; ?></td>

    <td><?php echo $row["vote"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>