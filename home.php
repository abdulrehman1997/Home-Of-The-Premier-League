<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="homecss.css">
	<title>Barclays Premier League</title>
</head>
<body>
	
            <?php
            if(isset($_SESSION['id'])): ?>
              
	<header>
		<div style="width:100%;background-color:#98AFC7;opacity:0.9">
	<a href="home.php"><img id ="logo" src="pics/Premier_League_Logo.svg.png" style=" opacity:2;"/></a>
		</div>
	
	</header>
	<nav>
		<ul class="mainmenu">
			<li class="menu"><a href="home.php">Home</a></li>
			<li class="menu"><a href="news.php">News</a></li>
			<li class="menu"><a href="results.php">Results</a></li>
			<li class="menu"><a href="table.php">Table</a></li>
			<li class="menu"><a href="fixtures.php">Fixtures</a></li>
			<li class="menu"><a href="#" onclick="location.href='includes/logout.inc.php'">Logout</a></li>
		</ul>
	</nav>
	
	<section>
	
<div class="article1">
			<style>

</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="pics/pogbahome.jpg" class="sld"/>
  <div class="text" style="font-size:20px">Paul Pogba completes Man Utd transfer for world-record fee</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="pics/leicesterhome.jpg" class="sld"/>
  <div class="text" style="font-size:20px">Leicester City win the Premier League title after a fairytale season</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="pics/managershome.jpg" class="sld"/>
  <div class="text" style="font-size:20px">The Premier League has its A-list cast of managers - now it just needs the players</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script type="text/javascript" src="slide.js"></script>
</div>
		
	
	
<div class="article2" class="tab">
	<table>
		<tr>
			<th>POSITION</th>
			<th>CLUB</th>
			<th>POINTS</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Leicester City FC</td>
			<td>81</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Arsenal FC</td>
			<td>71</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Tottenham Hotspur FC</td>
			<td>70</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Manchester City FC</td>
			<td>66</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Manchester United FC</td>
			<td>66</td>
		</tr>
		<tr>
			<td>6</td>
			<td>Southampton FC</td>
			<td>63</td>
		</tr>
		<tr>
			<td>7</td>
			<td>West Ham United FC</td>
			<td>62</td>
		</tr>
		<tr>
			<td>8</td>
			<td>Liverpool FC</td>
			<td>60</td>
		</tr>
		
	</table>
</div>
			
	</section>
	
	<aside>
		
	</aside>
	
	<footer>
			<ul class="sponsors">
			<li><a href="https://www.nike.com"><img src="pics/nike.png" class="sponsor"/></a></li>
			<li><a href="http://www.umbro.com/en-ww/"><img src="pics/umbro.png" class="sponsor"/></a></li>
			<li><a href="https://www.adidas.com"><img src="pics/adidas.png" class="sponsor"/></a></li>
			<li><a href="https://www.puma.com"><img src="pics/puma.png" class="sponsor"/></a></li>
		</ul>
	</footer>
	<h5"><a style="float:left;" href="contactus.php">Contact Us</a><a style="float:right;" href="aboutus.php">About Us</a></h5><br><br>
	
	
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
