<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
require("../mysql.php");
    
    $db=mysqli_connect('localhost','root','','slate') or die('Error connecting to MySQL Server.');
    
    $username = $_SESSION["username"];
    
    $query="SELECT PROJECTNAME, FINISHDATE, PROJECTNOTE, USERNAME FROM projects WHERE USERNAME = '$username' ORDER BY FINISHDATE ASC" ; 
    
    
    mysqli_query($db,$query) or die('Error querying database.');

    $result=mysqli_query($db,$query);

    $i = 0;
    while ($row=mysqli_fetch_array($result)) {
        $var[$i] = $row['PROJECTNAME'] . "<br \>" . $row['PROJECTNOTE'];
        $i++;
    }

    mysqli_close($db);

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
                <a href=""><dt><?php echo $var[0]; ?></dt><br></a>
                <a href=""><dt><?php echo $var[1]; ?></dt><br></a>
            </dl>
         </div>
         </div>
    </body>

</html>