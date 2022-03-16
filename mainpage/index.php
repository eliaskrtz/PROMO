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
        <h1>Slate</h1>
    </header>

    <body>
        <a href="/logout.php" id="toprightlogout">
            <button id="logoutbutton" type="button">Logout</button>
        </a>

        <div id="toprightname">
            <p><?php echo ($_SESSION["username"]) ?></p>
        </div>
        <a href="../createnewprojectpage/index.php" id="createnewprojectbtn">
            <button id="newprojectbtn" type="button">Create new project</button>
        </a>
        <div id="currentpro">
            <a href="../projectoverlaypage/index.php"><h3>Current Projects</h3></a>
            
            <dl id="listcurpro">
                <a href="/mainpage/index.php">
                    <dt>Testprojekt1</dt>
                    <dd>Testbeschreibung1</dd>
                </a>
                <br>
                <a href="/mainpage/index.php">
                    <dt>Testprojekt2</dt>
                    <dd>Testbeschreibung2</dd>
                </a>  
            </dl>
         </div>

         <div id="prevpro">
            <h3>Previous Projects</h3>

            <dl id="listcprevpro">
                <a href="/mainpage/index.php">
                    <dt>Testprojekt3</dt>
                    <dd>Testbeschreibung3</dd>
                </a>
                <br>
                <a href="/mainpage/index.php">
                    <dt>Testprojekt4</dt>
                    <dd>Testbeschreibung4</dd>
                </a>  
            </dl>
         </div>
    </body>

</html>