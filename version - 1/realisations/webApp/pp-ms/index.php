<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pop~Corn | Manager</title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon" style="border-radius: 25%;">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <!-- Bootstrap link -->
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">PP-Manager</a>
      </div>
      <ul>
      <?php 
        session_start();

        if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
 ?>
        <li><a href="#home">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Network.php">Network</a></li>
            <li>
              <a href="Auth/log_out.php">Logout</a></li>
        <li>
          <div style="border-radius: 30px; width: 80px; height: 30px; background-color:aliceblue; text-align: center;">
            <?php echo "@.".$_SESSION['name'] ?>
          </div>
        </li>
        <?php 

          }else{
          ?>
            <li><a href="#home">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Network.php">Network</a></li>
            <li><a href="Auth/index.php">Login</a></li>
          <?php
}

 ?>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">Pop Project Manager Site</div>
    <div class="sub_title">Easily eat your projects with an incontextable saving of time.</div>
    <div class="btns">
      <button>Learn More</button>
      <?php 
        if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
      ?>
          <a href="home.php" style="background: coral;color: white; height: 65px; width: 170px;border-radius: 5px;border: none;margin: 0 10px; border: 2px solid white; font-size: 20px; font-weight: 500;padding: 0 10px;cursor: pointer;outline: none; text-decoration: none;transition: all 0.3s ease;">Get started</a>
      <?php 
      }else{
      ?>
          <button>Subscribe</button>
          <?php
      }
      ?>      
    </div>
  </div>
<!--  -->
  <footer class="footer bg-dark text-center text-white" id="footer">
    <div class="text-center p-3" > <p>&copy; 2023 Develop At Marwadi College Rajkot. All Rights
    Reserved | Design by:- Jeryh FOTO<o:p></o:p></p>
    </div>
    <!-- Copyright -->
    </footer>
</body>
</html>
