<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
</head>
<body>
  <div class="container">
    <div class="nav">
    </div>
    <div class="middle">
      <div class="right"></div>
      <div class="login-form left">
        <h1>Login</h1>
        <form action="loginProcess.php" method="post">
          <label for="loguid">Username</label>
          <input type="text" name="loguid" id="loguid" required>
          <label for="logupass">Password</label>
          <input type="password" name="logupass" id="logupass" required>
          <?php
            if(isset($_SESSION['id'])){
              echo "<span class=warnning-1 >Incorrect username or password.</span>";
              session_destroy();
            }
          ?>
          <div class="butoon-section">
          <a class="button" href="regFrom.php">Register</a>
          <input class="login-button button" type="submit" value="Login">
          </div>
        </form>
        
      </div>
    </div>
    <div class="footer">
    </div>
  </div>
</body>
</html>