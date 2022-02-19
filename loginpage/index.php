<html>
   <head>
       <link rel="stylesheet" href="styles.css">
   </head>
 
   <header>
       <h1 id="mainheading">ProMotion</h1>
   </header>
 
   <body>

    <?php
    if(isset($_POST["submit"])){
      require("../mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 1){
        //Username ist frei
        $row = $stmt->fetch();
        if(password_verify($_POST["password"], $row["PASSWORD"])){
          session_start();
          $_SESSION["username"] = $row["USERNAME"];
          header("Location: ../mainpage/index.php");
        } else {
          echo "Der Login ist fehlgeschlagen";
        }
      } else {
        echo "Der Login ist fehlgeschlagen";
      }
    }
     ?>

     <h2>Login</h2>
    <form action="index.php" method="post">
      <div class="container">
        <div class="textbox">
          <input type="text" placeholder="Enter Username" name="username" required>
        </div>
        <div class="textbox">
        <input type="password" placeholder="Enter Password" name="password" required>
        </div>
        <div class="textbox">
          <button type="submit" name="submit" class="registerbutton">Login</button>
        </div>
      </div>
      
      <div class="bottomcontainer" style="background-color:#f1f1f1">
      <a href="../startpage/index.php">  
        <button type="button" class="cancelbtn">Cancel</button>
      </a>
        <a href="../registerpage/register.php" id="register">Noch keinen Account?</a>
      </div>
    </form>
   </body>
</html>
