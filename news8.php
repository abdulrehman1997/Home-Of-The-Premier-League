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

    <div class="div_news8">
      <h1><b>Dele Alli ruled out for 'few weeks' with knee injury picked up in training</h1></b>
      <img src="pics/alli.jpg" alt="Dele Alli ruled out due to knee injury" style="width:768px;height:432px;">
      <h2><p>Tottenham midfielder Dele Alli has been ruled out for "a few weeks" after suffering a knee injury in training.

Alli played 90 minutes of Wednesday's Champions League defeat to Bayer Leverkusen at Wembley, but picked up the injury on Saturday ahead of Sunday's derby clash with Arsenal at the Emirates.

Manager Mauricio Pochettino confirmed the news ahead of that game and said Alli would be further assessed over the next 48 hours to discover the full extent of the problem.</p>
          <p>"It was bad luck yesterday in the training session, he twisted his knee. We need to assess him today and tomorrow," Pochettino said. "He'll be out for a few weeks. We hope it's not a big issue. It's bad luck. He was in the team, he's an important player, but that's football."

The injury rules Alli out of England duty against Scotland and Spain next week, with Spurs returning to action at home to West Ham on November 19 before trips to Monaco and Chelsea later in the month.</p>
      </h2>
    </div>
</section>
  
  
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
