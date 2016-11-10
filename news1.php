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
    <div class="div_news1">
      <h1><b>Hector Bellerin close to new Arsenal contract, agent reveals</h1></b>
      <img src="pics/bellerin.jpg" alt="New contract for Hector Bellerin" style="width:768px;height:432px;">
      <h2>
            <p>Hector Bellerin is close to signing a new Arsenal contract, his agent has revealed.

The Spain right-back has repeatedly denied he is interested in rejoining Barcelona, the hometown club he left for north London in 2011.

And his representative, Albert Botines, has told The Guardian Bellerin is on the verge of committing beyond the end of his current deal, which still has more than two years to run.

"We are speaking and are now a lot closer than we were two weeks ago. In a normal situation he will sign," Botines said.</p>
          <p>"Hector is very happy at Arsenal. This would be the fourth time he has signed a new contract at the club and it is clear he has made good progress."

Bellerin joked last month he would refuse to answer the phone if Barca called and last week made it clear he sees his future at Arsenal, where he is established as first-choice right-back.

"If I wanted to play [at Barca] I would have stayed there," the 21-year-old said. "I was very happy when Arsenal showed interest in me and I decided to come here. I'm not looking back, I'm just looking to help Arsenal."</p>
      </h2>
    </div>
</section>
    
    
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
