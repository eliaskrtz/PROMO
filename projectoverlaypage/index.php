<html>

<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>

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
       
        <div id="grid-container-all">
                <div id="sceneoverview">
                    <h3>Scene Overview</h3>
                </div>
            <div id="grid-container-project"> 
                <div id="projectname">
                    <h3>Projectname: *PLATZHALTER*</h3>
                </div>
                <div id="projectnumber">
                    <h3>Projectnumber: *PLATZHALTER*</h3>
                </div>
                <div id="date">
                    <h3>Date: *PLATZHALTER*</h3>
                </div> 
            </div>
        </div>

        <div id="content">
            <div id="scenelist">
                <a href="projectoverlaypage.html">Scene 1 </a>
                <a href="projectoverlaypage.html">Scene 2 </a>
                <a href="projectoverlaypage.html">Scene 3 </a>
                <a href="projectoverlaypage.html">Scene 4 </a>
                <a href="projectoverlaypage.html">Scene 5 </a>
            </div>
        </div>
    </body>

</html>