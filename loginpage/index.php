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
    <form action="index.php" method="post">
       <div class="container">
         <div class="text">
         <label for="uname"><b>Username</b></label>
         </div>
         <div class="textbox">
           <input type="text" placeholder="Enter Username" name="username" required>
         </div>
        
         <div class="text">
             <label for="psw"><b>Password</b></label>
         </div>
         <div class="textbox">
           <input type="password" placeholder="Enter Password" name="password" required>
         </div>
 
           <button type="submit" name="submit" class="loginbutton">Login</button>
           <label>
             <input type="checkbox" checked="checked" name="remember"> Remember me
           </label>
         </div>
      
         <div class="bottomcontainer" style="background-color:#f1f1f1">
           <button type="button" class="cancelbtn">Cancel</button>
           <span class="psw">Forgot <a href="#">password?</a></span>
         </div>
      </form>
   </body>
</html>
