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

    <div class="div_news2">
      <h1><b>Zlatan Ibrahimovic vows Manchester United will do more, and so will he</h1></b>
      <img src="pics/zlatan.jpg" alt="Zlatan Ibrahimovic vows to do more" style="width:768px;height:432px;">
      <h2>
        <p>Zlatan Ibrahimovic admits he did not expect to miss chances for Manchester United, but has vowed it will "click" soon.

The Swede scored four goals in his opening four Premier League matches since signing on a free transfer after leaving Paris Saint-Germain in the summer, but went six top-flight games without finding the net again before finally scoring twice against Swansea on Sunday.

United secured their first win in five games with the 3-1 victory at the Liberty Stadium, and with Jose Mourinho's side lying sixth in the table, Ibrahimovic revealed he was not expecting to find the English league so challenging.</p>

        <p>"I think I could have scored a couple more goals than I have done - I missed pretty good chances which I didn't see myself doing," Ibrahimovic told Inside United. "But it's a different game here [in England].
          "Here, it's different compared to the ones [the leagues] before. When you play a game here, there is no team controlling it, it's back and forth, back and forth, back and forth. That's the way the game is, you have to get used to it.

"With my performance, I am happy. I know I can do more, I know the team can do more and I want to do more and I will do more."

Mourinho, who was suspended from the touchline for the win at Swansea, appeared to question the character of some of his players following the game, leading to England interim manager Gareth Southgate defending Luke Shaw and Chris Smalling - who had made themselves unavailable for the fixture. </p>

      </h2>
    </div>
</section>
    
    
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
