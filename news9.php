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

    <div class="div_news9">
      <h1><b>Everton's Muhamed Besic progressing well after knee surgery</h1></b>
      <img src="pics/besic.jpg" alt="Besic recovering" style="width:768px;height:432px;">
      <h2><p>Ronald Koeman has urged patience with Muhamed Besic's return following knee surgery but says he is "on his way back".

Bosnia-Herzegovina midfielder Besic was initially ruled out for six months after tearing an anterior cruciate ligament during Wayne Rooney's testimonial at Old Trafford in August.

But according to Everton boss Koeman, Besic, who signed a new deal to keep him at Goodison Park until 2021 in February, is showing positive signs in his recovery. </p>
        <p>"He's progressing well," Koeman told the Liverpool Echo. "He's on his way to being back. It's a long-term injury and you need to be patient.

"But the medical staff are really happy with Mo because he has shown a really good professional attitude. That makes it easier to come back."

Meanwhile, young Toffees defender Tyias Browning is also nearing a return from a knee injury that has kept him sidelined for a year.</p>
        <p>The defender has played two halves of football for the Under-23s recently, and said: "My knee feels good.

"It's been a really tough time, but I feel like I am coming out the other end now and it is good feeling to be back out on the pitch.

"I'm not sure how far away I am from full match fitness. I've got a lot of football to play with the under-23s and a lot to catch up on."</p>
      </h2>
    </div>
</section>
    
    
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
