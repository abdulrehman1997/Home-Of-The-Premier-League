<?php
	session_start();
?>    
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="indexcss.css">
</head>
<body>
  <?php
            if(isset($_SESSION['id'])): ?>
              <?php header("Location: home.php");?>
  <?php            
            else  :?>
              

            <?php
  $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
  <div class="homepage-hero-module">

    <div class="v" class="video-container">
      <video autoplay loop class="fillWidth">
        <source src="pics/Beach-Ball.mp4" type="video/mp4" />
        <source src="pics/Beach-Ball.webm" type="video/webm" />
      </video>
    </div>


    <div class="loginform">
      <nav>
        <ul><?php
         echo" <form action='includes/login.inc.php' method='POST'>
        <input type='text' name='uid' placeholder='Username'> 
        <input type='password' name='pwd' placeholder='Password'>
        <button type='submit'>LOGIN</button>
      </form>" ;
      ?>
          <?php
            if (strpos($url,'error=loginempty' )) {
              echo" <style> nav ul form{ border-bottom:50px; } </style> <div style=' border-style: solid; border-color: black; border-top:50px; background-color: #660198; text-align: center; color: white;'>Please enter all credentials.</div>"  ;
            }
            else if (strpos($url,'error=loginerr' )) {
              echo" <style> nav ul form{ border-bottom:50px; } </style> <div style=' border-style: solid; border-color: black; border-top:50px; background-color: #660198; text-align: center; color: white;'>Incorrect username or password entered.</div>";
            }
          ?>
        </ul>
        
      </nav>
      
    </div>  
      <!--<?php
        /*if(isset($_SESSION['id'])){
          echo $_SESSION['id'];
        }else{
          echo "you are not logged in";
        }*/
      ?>-->  



    <div class="signupform">
    <form action="includes/signup.inc.php" method="POST">
          <input type="text" name="first" placeholder="First Name"><br><br>
          <input type="text" name="last" placeholder="Last Name"><br><br>
          <input type="text" name="uid" placeholder="Username"><br><br>
          <input type="password" name="pwd" placeholder="Password"><br><br>
          
          <button type="submit">SIGN UP</button><br><br>
          <?php
            if (strpos($url,'error=empty' )) {
              echo" <div style='background-color: #660198; text-align: center; color: white;'> Please enter all credentials. </div>";
            }
            else if (strpos($url,'error=username' )) {
              echo" <div style='background-color: #660198; text-align: center; color: white;'> Username already taken. </div>";
            }
          ?>

    </form>
  </div>
    
  </div>
  <header>
    <a href="home.php"><img id ="logo" src="pics/Premier_League_Logo.svg.png"/></a>
  </header>


</body>
</html>


             
          <?php endif ?>
