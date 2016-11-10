<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="newscss.css">
    <title>Barclays Premier League News</title>
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

    <div class="div_news10">
      <h1><b>Jack Wilshere admits he is unsure over his long-term future at Arsenal</h1></b>
      <img src="pics/wilshere.jpg" alt="Wilshere unsure over Arsenal future" style="width:768px;height:432px;">
      <h2><p>Jack Wilshere admits he is unsure if he will ever play for Arsenal again.

The 24-year-old, who has been recalled for England after his impressive performances on loan at Bournemouth this season, says he does not know what the future holds beyond this term.

Wilshere insists a loan was the best option for him after Gunners boss Arsene Wenger failed to offer him first-team football guarantees, and believes Bournemouth's different approach is benefiting his fitness.

Despite his affection for Arsenal, having graduated from the club's academy, Wilshere admits there may come a time when he will have to consider leaving the club on a permanent basis.</p>
        <p>"It's difficult for me to say because I love Arsenal and I've had great times there, and they've been great for me, and I can still see myself playing there.

"But who knows what the future holds? I've got a year left when I go back there.

"At the moment I'm just trying to have a season where it puts me in a good position at the end of the year, I'm improved as a player and Arsenal want me back, and we'll see where we go from there."</p>
      </h2>
    </div>
</section>
    
    
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
