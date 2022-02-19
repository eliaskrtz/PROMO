<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>

<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>

    <header>
        <h1>ProMotion</h1>
    </header>

    <body>
        <a href="/logout.php" id="toprightlogout">
            <button id="logoutbutton" type="button">Logout</button>
        </a>

        <div id="toprightname">
            <p><?php echo ($_SESSION["username"]) ?></p>
        </div>
        
       
    </body>

</html>