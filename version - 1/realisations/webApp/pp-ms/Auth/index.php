<?php 
        session_start();

        if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
          header("Location: ../index.php");
     
          exit();
        }else{
 ?>
   
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Authentification | Pp-Manager </title>
    <link rel="stylesheet" href="../css/auth.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body> 
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">PP-Manager</a>
      </div>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Network.php">Network</a></li>
      </ul>
    </div>
  </nav>
  <div class="body">

    <div class="container">
      <input type="checkbox" id="flip">
      <div class="cover">
        <div class="front">
          <img src="../images/frontImg.jpg" alt="">
          <div class="text">
            <span class="text-1">Every new friend is a <br> new adventure</span>
            <span class="text-2">Let's get connected</span>
          </div>
        </div>
        <div class="back">
          <img class="backImg" src="../images/backImg.jpg" alt="">
          <div class="text">
            <span class="text-1">Complete miles of journey <br> with one step</span>
            <span class="text-2">Let's get started</span>
          </div>
        </div>
      </div>
      <div class="forms">
          <div class="form-content">
            <div class="login-form">
              <div class="title">Login</div>
                      <?php if (isset($_GET['lg_err'])) { ?>
                        <span style="color:red; font-size: 14px; " class="error"><?php echo $_GET['lg_err']; ?></span>
                      <?php } ?>
            <form name="loginForm" action="login.php" method="post">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                      <input type="email" name="lg_email" placeholder="Enter your email" >
                      
                      <?php if (isset($_GET['lg_email_err'])) { ?>
                        <span style="color:red; font-size: 10px; " class="error"><?php echo $_GET['lg_email_err']; ?></span>
                      <?php } ?>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password"  name="lg_password" placeholder="Enter your password" >
                 
                      <?php if (isset($_GET['lg_pwd_err'])) { ?>
                        <span style="color:red; font-size: 10px; " class="error"><?php echo $_GET['lg_pwd_err']; ?></span>
                      <?php } ?>
                </div>
                <div class="text"><a href="#">Forgot password?</a></div>
                <div class="button input-box">
                  <input type="submit" value="Login">
                </div>
                <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
              </div>
          </form>
        </div>
          <div class="signup-form">
            <div class="title">Signup</div>
          <form name="registForm" action="register.php"  method="post" enctype="multipart/form-data"> 
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" name="name" placeholder="Enter your name">
                </div>
                <?php if (isset($_GET['name_err'])) { ?>
                    <span style="color:red; font-size: 10px; " class="error"><?php echo $_GET['name_err']; ?></span>
                  <?php } ?>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="text" name="email" placeholder="Enter your email">
                  <span id="email_err" style="color:red"></span>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="pwd" placeholder="Enter your password" required>
                  <span id="pwd_err" style="color:red"></span>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="cpwd" placeholder="Confirm your password" required>
                  <span id="cpwd_err" style="color:red"></span>
                </div>
                <div class="button input-box">
                  <input type="submit" value="Sumbit">
                </div>
                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
              </div>
        </form>
      </div>
      </div>
      </div>
    </div>
  </div>
  <!-- =========================== SCRIPT ===================== -->
  <!-- <script src="../js/validate.js"></script> -->
</body>
</html>
<?php
  }
?>