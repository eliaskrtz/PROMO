<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: index.php");
  exit;
  }
?>

<head>
  <meta charset="utf-8">
  <title>Account erstellen</title>
  <link rel="stylesheet" href="styles.css">
</head>
  
  
<body>   
  <h2>Create new project</h2>
  
  <a href="/logout.php" id="toprightlogout">
    <button id="logoutbutton" type="button">Logout</button>
  </a>
  <div id="toprightname">
    <p><?php echo ($_SESSION["username"]) ?></p>
  </div>

  <form action="register.php" method="post">
    
    <div class="container">
      <div class="textbox">
        <input type="text" placeholder="Projectname" name="projectname" required>
      </div>
        
      <div class="textbox">
        <input type="text" placeholder="Finish date" name="creationdate" required>
      </div>
      
      <div class="textbox">
        <input type="text" placeholder="Projectdescription" name="projectdescription" required>
      </div>
      
      <div class="textbox">
        <button type="submit" name="submit" class="registerbutton">Create</button>
      </div>
    </div>

    <div class="bottomcontainer" style="background-color:#f1f1f1">
      <a href="../projectpage/index.php">
        <button type="button" class="cancelbtn">Cancel</button> 
      </a>
    </div>

  </form>

  <br>
</body>
</html>