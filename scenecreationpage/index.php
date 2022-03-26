<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account erstellen</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <script>

  	function myFunction() {
     document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
     var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("myDropdown");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
  </script>

  <h1 id="mainheading">Slate</h1>

  <a href="/logout.php" id="toprightlogout">
    <p>Logout</p>
  </a>

  <div id="toprightname">
    <p><?php echo ($_SESSION["username"]) ?></p>
  </div>

  <h2>New scene</h2>

  <form action="register.php" method="post">
    <div class="container">
      <div class="textbox">
        <input type="text" placeholder="Scene number" name="SCENENUMBER" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Eigene Reihenfolge" name="REIHENFOLGE" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Scene title" name="SCENETTILE" required>
      </div>

      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Scene time</button>
        <div id="myDropdown" class="dropdown-content"  >
          <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
          <a href="#about">About</a>
          <a href="#base">Base</a>
          <a href="#blog">Blog</a>
          <a href="#contact">Contact</a>
          <a href="#custom">Custom</a>
          <a href="#support">Rotlicht</a>
          <a href="#tools">Titten</a>
        </div>
      </div>

      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Scene setting</button>
        <div id="myDropdown" class="dropdown-content"  >
          <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
          <a href="#about">About</a>
          <a href="#base">Base</a>
          <a href="#blog">Blog</a>
          <a href="#contact">Contact</a>
          <a href="#custom">Custom</a>
          <a href="#support">Support</a>
          <a href="#tools">Titten</a>
        </div>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Scene Description" name="SCENEDESCRIPTION" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Set Design" name="SETDESIGN" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Props" name="PROPS" required>
      </div>

      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Location</button>
        <div id="myDropdown" class="dropdown-content"  >
          <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
          <a href="#about">About</a>
          <a href="#base">Base</a>
          <a href="#blog">Blog</a>
          <a href="#contact">Contact</a>
          <a href="#custom">Custom</a>
          <a href="#support">Rotlicht</a>
          <a href="#tools">Titten</a>
        </div>
      </div>

      <div class="textbox">
        <button type="newlocation" name="Create new location" class="registerbutton">Create new location</button>
      </div>

      <div class="textbox">
        <button type="newlocation" name="Create new location" class="registerbutton">Create new scene</button>
      </div>

    </div>
  </form>
  </body>
  <footer>
    <div class="bottomcontainer">
      <a href="../projectpage/index.php">
        <button type="button" class="cancelbtn">Cancel</button>
      </a>
    </div>
  </footer>
</html>
