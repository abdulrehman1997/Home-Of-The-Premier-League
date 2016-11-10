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

    <div class="div_news7">
      <h1><b>Antonio Conte is expertly handling Chelsea's transformation</h1></b>
      <img src="pics/conte.jpg" alt="Conte's Chelsea transformation" style="width:768px;height:432px;">
      <h2><p>Chelsea's 5-0 win over Everton on Saturday saw Antonio Conte's team move to the top of the Premier League. Adam Bate looks at why their dramatic transformation in fortunes could also bring the long-term change that was necessary at Stamford Bridge...

Antonio Conte has lost none of his exuberance on the touchline despite the recent public reprimand he received from Jose Mourinho. Even as the fifth goal went in against Everton, there were high fives to be had with the crowd. The intensity, it seems, is ever present.</p>
          <p>Motivation has been a massive factor in Chelsea's recent upturn in fortunes under the Italian. This was the quality that his compatriot and former Blues boss Carlo Ancelotti identified as having been Mourinho's issue last season. It has been emphatically addressed.

In the five-game winning sequence that helped take Chelsea to the top of the Premier League table on Saturday night, Conte's men have outrun their opponents by a combined distance of around 26 kilometres. The work rate is conspicuous and purposeful.

Diego Costa is full of enthusiasm once more, brushing Phil Jagielka aside with contempt as he strode away to set up the final goal of the evening. His form marks the return of the snarling centre-forward who drove Chelsea to the title two seasons ago.</p>
          <p>Behind Costa in midfield, there's N'Golo Kante - the man whose relentless dynamism helped Leicester to the same crown last season. Meanwhile, Victor Moses and Marcos Alonso have brought athleticism to the team and Pedro has rediscovered his appetite of old.

But for all this energy and endeavour, Conte's real triumph has been a deftness of touch. It's not all screams and an age-old urge for the side to run harder. They're working smarter too. His intellectual savvy in navigating a difficult path through Chelsea's problems is paying off.</p>
      </h2>
    </div>
</section>
  
  
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
