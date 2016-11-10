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

    <div class="div_news6">
      <h1><b>Jamie Vardy urged to stay 'calm' by Leicester boss Claudio Ranieri</h1></b>
      <img src="pics/vardy.jpg" alt="Vardy urged to stay calm" style="width:768px;height:432px;">
      <h2><p>Claudio Ranieri has urged Leicester forward Jamie Vardy to stay "calm" following his recent dry spell in front of goal.

This time last season Vardy was nine matches into his incredible record-breaking run of scoring in 11 successive Premier League games, but 12 months on, the England international has not found the net in 11 outings for the Foxes.

Vardy rejected the chance to join Arsenal in a £20m deal in the summer, instead signing a new four-year contract with the Premier League champions. Ranieri has insisted he is not concerned about Vardy's current form and gave his backing to the 29-year-old ahead of the Super Sunday clash with West Bromwich Albion.</p>
        <p>"Jamie is a goalscorer and all the goalscorers in the world have good periods and bad periods," the Leicester manager said.

"It's important for him to stay calm and, sooner or later, he will start to score again. He is still working hard for the team."
Leicester endured a shaky start to their title defence, conceding 11 goals in their opening six matches, but have responded by keeping four clean sheets in their last seven matches in all competitions.

Ranieri's men have played their best football in the Champions League this season and are on the brink of securing qualification to the last 16, having not conceded a goal or lost a game in the competition. </p>
        <p>Leicester, who currently sit in 11th place in the Premier League, have not lost at the King Power Stadium in the league since September 2015 and Ranieri has urged his side to build on their new-found momentum.

"We are getting better," the Italian said. "But it's not only the defenders; all the team now is better, with the fighting spirit of the squad."</p>
      </h2>
    </div>
</section>
    
    
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
