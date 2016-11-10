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

    <div class="div_news3">
      <h1><b>Manchester City's Ilkay Gundogan says Pep Guardiola brings out best in him</h1></b>
      <img src="pics/gundogan.jpg" alt="Ilkay Gundogan hails Pep Guardiola" style="width:768px;height:432px;">
      <h2>
        <p>Manchester City's Ilkay Gundogan has welcomed the input of manager Pep Guardiola and credits the Spaniard with improving his game.

The 26-year-old midfielder, who joined City from Borussia Dortmund in the summer, has hit form since returning from injury and has now scored five goals in 10 games.

"[Guardiola] doesn't leave anything to chance and knows what to tell his players in every situation, especially in terms of tactics," Gundogan told German magazine Kicker.

"You have the feeling that 99 per cent sure isn't enough for him, he wants to be 100 per cent that what he has thought out will fit perfectly to the game and the opponent.

"For example, against Barcelona he changed the formation after half an hour from a 4-1-4-1 to a 4-4-2. He gave us a totally different feeling and we suddenly had the game under control.

"It's unique the way he does that, but players from Bayern and Barcelona had already said that about him. And the success he has had hasn't come by accident.</p>
      <p>Although Borussia managed to beat him from time to time, it was impressive for my team-mates and I [to see] how he always managed to find solutions for every situation. I am now experiencing that for myself and it's really bringing me along."

Gundogan also says his new advanced role is contributing to the goalscoring prowess he has displayed of late.

"I know that I have Fernandinho, a defensive midfielder, behind me and that he is always covering my back," he added.

"That is why I am playing more attacking and getting close to the penalty area more frequently. At Dortmund, I was more the defensive cover."</p>
      <p>The German netted just six goals in 73 appearances for Dortmund before making the £21m switch to the Premier League in the summer in a four-year deal.

But Gundogan suggests that with the move to Manchester came an added expectation to challenge for trophies every season and the club's ambitions are somewhat different to that of his former Bundesliga outfit.

"The pressure and responsibility for the individual players is accordingly big and it's certainly different to in Dortmund," he added.

"They make it quite clear that they crave the very best here.

"The expectation levels are extremely high due to the transfers and above all due to Pep. He is simply success personified."</p>
      </h2>
    </div>
</section>
  
  
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
