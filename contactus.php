<?php
	session_start();
?> 
<!DOCTYPE html>
<html>
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="contactuscss.css">
	<title>Contact</title>
</head>
<body style="background-color: #FDF8FF;">
	<?php
            if(isset($_SESSION['id'])): ?>
  <?php           
               $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
	<header>
	<a href="home.php"><img id ="logo" src="pics/Premier_League_Logo.svg.png" style=" opacity:2;"/></a>
	
	
	</header>
	<div>
	<nav>
		<ul class="mainmenu">
			<li class="menu"><a href="home.php">Home</a></li>
			<li class="menu"><a href="news.php">News</a></li>
			<li class="menu"><a href="results.php">Results</a></li>
			<li class="menu"><a href="table.php">Table</a></li>
			<li class="menu"><a href="fixtures.php">Fixtures</a></li>
			<li class="menu"><a href="account.php">Account</a></li>
		</ul>
	</nav>

	<section>
	<div class="contactform">
		<form action="includes/contactus.inc.php" method="POST">
		<br><br>
         	 <input class="form" type="text" name="first" placeholder="First Name"><br><br>
         	 <input class="form" type="text" name="last" placeholder="Last Name"><br><br>
         	 <input class="form" type="text" name="email" placeholder="email"><br><br>
         	 <input class="form" type="text" name="phno" placeholder="Phone number"><br><br>
         	 <textarea class="form" name="message" placeholder="Message"></textarea><br><br>
         	 <input type="submit" name="submit" id="submit" value="submit">
         	 <input type="reset" name="Reset" id="reset" value="reset"><br><br>
         	  <?php
            if (strpos($url,'error=empty' )) {
              echo"Please enter all credentials.";
            }
          ?> 
    	</form>
    </div>




	</section>
	</div>

	<footer>
			<ul class="sponsors">
			<li><a href="https://www.nike.com"><img src="pics/nike.png" class="sponsor"/></a></li>
			<li><a href="http://www.umbro.com/en-ww/"><img src="pics/umbro.png" class="sponsor"/></a></li>
			<li><a href="https://www.adidas.com"><img src="pics/adidas.png" class="sponsor"/></a></li>
			<li><a href="https://www.puma.com"><img src="pics/puma.png" class="sponsor"/></a></li>
		</ul>
	</footer>
	
</body>
</html>

  <?php            
            else  :?>
            	<?php header("Location: index.php");?>
 <?php endif ?>