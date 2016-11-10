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

    <div class="div_news4">
      <h1><b>Philippe Coutinho, Roberto Firmino and Sadio Mane praised by Liverpool captain Jordan Henderson</h1></b>
      <img src="pics/liverpool.jpg" alt="Henderson hails trio" style="width:768px;height:432px;">
      <h2>
        <p>Jordan Henderson has praised Philippe Coutinho, Roberto Firmino and Sadio Mane for their role in Liverpool's start to the season.

All three forwards scored as Liverpool beat Watford 6-1 at Anfield on Sunday, a result which saw them move one point clear at the top of the Premier League after 11 games.

Henderson admits much of the credit has to go to their in-form attackers, who have contributed towards a league-high 30 goals this season.

"They are all world-class players," Henderson said.</p>
        <p>"Their understanding of the game, not only going forward, but also the work rate they all give for the team in terms of pressing and winning the ball back high up the pitch."

Mane scored twice against Watford to take his tally of league goals to six, while the Brazilian pair of Coutinho and Firmino have five goals apiece. But the Liverpool captain was quick to highlight the defensive work of the trio as well as their attacking exploits.

"They all help the team defensively," Henderson added. "The three of them are fantastic at that and going forward they are unstoppable when they are on it." </p>
        <p>Henderson was a pivotal figure in Liverpool's second-placed finish under Brendan Rodgers in the 2013-14 season, but the 26-year-old believes his side must not compare the current crop of players to that of three years ago.

"I don't really like comparing this team to a couple of seasons ago," he said. "I prefer to concentrate on this team and what we're good at and what we're doing. The team of 2013-14 is in the past."

"As a team I feel we have a lot of quality in the final third and they've been brilliant over the past few weeks."</p>
      </h2>
    </div>
</section>
    
    
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>

