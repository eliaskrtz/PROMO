<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account erstellen</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("../mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 0){
        //Username ist frei
        if($_POST["pw"] == $_POST["pw2"]){
          //User anlegen
          $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, EMAIL, PASSWORD) VALUES (:user, :email, :pw)");
          $stmt->bindParam(":user", $_POST["username"]);
          $stmt->bindParam(":email", $_POST["email"]);
          $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
          $stmt->bindParam(":pw", $hash);
          $stmt->execute();
          header("Location: ../loginpage/index.php");
        } else {
          echo "Die Passwörter stimmen nicht überein.";
        }
      } else {
        echo "Der Username ist bereits vergeben";
      }
    }
     ?>

     
    <h1 id="mainheading">ProMotion</h1>
    <h2>Register</h2>
    <form action="register.php" method="post">
      <div class="container">
        <div class="textbox">
          <input type="text" placeholder="Enter Username" name="username" required>
        </div>
        <div class="textbox">
        <input type="text" placeholder="Enter Email" name="email" required>
        </div>
        <div class="textbox">
        <input type="password" placeholder="Enter Password" name="pw" required>
        </div>
        <div class="textbox">
          <input type="password" placeholder="Verify Password" name="pw2" required>
        </div>

        <div class="textbox">
          <button type="submit" name="submit" class="registerbutton">Register</button>
        </div>
      </div>

      <div class="bottomcontainer" style="background-color:#f1f1f1">
        <a href="../startpage/index.php">
          <button type="button" class="cancelbtn">Cancel</button>
        </a>
        <a href="/loginpage/index.php" id="alreadyacc">Hast du bereits einen Account?</a>
      </div>
    </form>
    <br>
  </body>
</html>