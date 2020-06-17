<!DOCTYPE html>
<head>
  <title>Voting Day</title>
  <link href="css/admin.css" rel="stylesheet" type="text/css">
  <script src="js/scripts.js"></script>
</head>
<body>

  <div class="topnav">
    <a class="active" href="admin.php">Home </a>
    <a href="candidates.php">Candidates</a>
    <a href="">Department</a>
    <a href="results.php">Results</a>
    <a href="voters.php" >Add voters</a>
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
                      <h1>Add Voter Login Details</h1>
                        <form class="reg-form" action="cand.php" method="POST">
                                
                                <input required type="text" name="fname" id="" placeholder="Name"><br>
                                <input required type="text" name="sname" id="" placeholder="Name"><br>
                                <input required type="text" name="mname" id="" placeholder="Name"><br>
                                <input required type="text" name="id" id="" placeholder="ID">   <br>
                                <input type="file"name="image"  placeholder="Candidate Image" >  <br>
                                <select required name="position"> <br>
                                        <option value="Mombasa">Mombasa(001)</option>
                                        <option value="Kwale">Kwale(002)</option>
                                        <option value="Kilifi">Kilifi(003)</option>
                                        <option value="Tana River">Tana River(004)</option>
                                        <option value="Lamu">Lamu(005)</option>
                                        <option value="Taita–Taveta">Taita–Taveta(006)</option>
                                        
                                    
                                    </select><br>
                                    <button type="submit" name="add_cand"value="UPLOAD" >Add Candidate</button> 
                                    <button type="reset" name="add_cand">Clear</button> 

                        </form>


</body>
</html>
