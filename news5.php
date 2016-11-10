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

    <div class="div_news5">
      <h1><b>Dimitri Payet hints at January exit from West Ham</h1></b>
      <img src="pics/payet.jpg" alt="Payet hints at exit" style="width:768px;height:432px;">
      <h2>
        <p>Dimitri Payet has hinted he could leave West Ham in the upcoming January transfer window.

The France playmaker has been a star performer for the Hammers since making a £10.75m move from Marseille in June 2015, scoring 14 goals in 48 appearances for Slaven Bilic's side.

West Ham rewarded Payet with a new five-and-a-half year deal in February, rumoured to be worth as much as £125,000-a-week, in a bid to stave off interest from potential suitors. </p>
        <p>But following West Ham's poor start to the Premier League season, the 29-year-old has suggested he may be open to leaving the east London club.

When asked about his future plans, Payet told Telefoot in France: "We've had a very poor start. Leave in January? I'm asking other questions right now but I've closed the door to nothing."</p>
        <p>West Ham have won just three of their opening 11 matches and currently sit in 16th place, just a point clear of the relegation zone.

Payet added: "Until now, I always chose my clubs depending on the sports project. I work like that. Until I can play at a level like this, it will be the case.

"Go to PSG or Marseille? For now, they have not come to me, so I do not ask myself."</p>
      </h2>
    </div>
</section>
    
    
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>

