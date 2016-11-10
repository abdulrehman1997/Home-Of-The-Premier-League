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
	<br>
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
	<br><br>
<div class="first_div">
    <h1><b>Paul Pogba completes Man Utd transfer for world-record fee</h1></b>
    <img src="pics/pogba.jpg" alt="Pogba transfer" style="width:512px;height:461.5px;">
    <h2>
        <p>Manchester United have announced the signing of Paul Pogba in a world-record transfer from Juventus.

        Pogba, 23, has signed a five-year contract with the option of a sixth season after United agreed to pay the Italian champions €105million (£89m) over the course of two years.

        That figure beats the estimated £85m that Real Madrid paid Tottenham for Gareth Bale in 2013 in the previous world-record deal.
      </p>
      <p>Juventus revealed United could owe them a further five million euros (£4.25million) if certain sporting targets are reached during the course of Pogba's contract.

        Pogba left United four years ago for a nominal fee, and went on to win four Serie A titles and the Coppa Italia twice while his reputation grew - persuading Jose Mourinho to pay a colossal sum to bring him back to Old Trafford.

        "I am delighted to rejoin United," Pogba said. "It has always been a club with a special place in my heart and I am really looking forward to working with Jose Mourinho."</p>
    </h2>
    </div>
<br><br>
    <div class="second_div">
    <h1><b>Leicester City win the Premier League title after a fairytale season</h1></b>
    <img src="pics/leicester.jpg" alt="Leicester City win the Premier League title" style="width:481px;height:305.5px;">
    <h2>
        <p>Leicester City have completed one of the most remarkable stories in the history of English football by winning the Premier League title.
           Written off as relegation candidates at the start of the season, when the bookmakers made Leicester 5,000-1 outsiders to be crowned champions,
           they secured the first top-flight title in the club’s history after Tottenham were unable to beat Chelsea on Monday night.</p>
           Spurs had to win at Stamford Bridge to extend the title race after Leicester’s point at Manchester United on Sunday. They drew 2-2, handing Claudio Ranieri’s side the prize.

           After flying back to England on Monday night having had lunch in Italy with his 96-year-old mother, Ranieri said: “I’m so proud. I’m happy for my players, for the chairman, for the staff at Leicester City, all our fans and the Leicester community.
           It’s an amazing feeling and I’m so happy for everyone. I never expected this when I arrived.”

        <p>It is an incredible tale on so many levels, not least the fact that Leicester were so nearly relegated from the Premier League last season.
           They spent 140 days at the bottom of the table and looked set for an immediate return to the Championship until they won seven of their last nine matches under Nigel Pearson to climb clear of the bottom three.</p>
    </h2>
    </div>
<br><br>
    <div class="third_div">
    <h1><b>The Premier League has its A-list cast of managers - now it just needs the players</h1></b>
    <img src="pics/managers.jpg" alt="Premier League now has the best managers in the world" style="width:619px;height:409px;">
    <h2>
        <p>Jose Mourinho’s arrival has completed the set.</p>

        <p>Never before has such a stellar managerial cast been assembled as the one that currently graces the Premier League.</p>

        <p>Yes, the best coaches populate England’s biggest clubs. The decision-makers who appointed the Special One, Pep Guardiola, Jurgen Klopp, Arsene Wenger and Antonio Conte deserve a round of applause.

          Their logic for either bringing in, or sticking with, this particular group is sound.</p>

          <p>If we were shooting a film it would be the equivalent of asking Robert De Niro, Leonardo Di Caprio, Tom Hanks, Johnny Depp, Al Pacino and Jack Nicholson to share the credits. Welcome to managerial Hollywood!</p>
    </h2>
    </div>
<br><br>
    <div class="fourth_div">
      <h1>
      <a href="news1.php">Hector Bellerin close to new Arsenal contract, agent reveals</a>
      </h1>
    </div>
<br>
    <div class="fifth_div">
      <h1>
      <a href="news2.php">Zlatan Ibrahimovic vows Manchester United will do more, and so will he</a>
    </div>
<br>
    <div class="sixth_div">
      <h1>
      <a href="news3.php">Manchester City's Ilkay Gundogan says Pep Guardiola brings out best in him</a>
    </div>
<br>
    <div class="seventh_div">
      <h1>
      <a href="news4.php">Philippe Coutinho, Roberto Firmino and Sadio Mane praised by Liverpool captain Jordan Henderson</a>
    </div>
<br>
    <div class="eighth_div">
      <h1>
      <a href="news5.php">Dimitri Payet hints at January exit from West Ham</a>
    </div>
<br>

    <div class="ninth_div">
      <h1>
      <a href="news6.php">Jamie Vardy urged to stay 'calm' by Leicester boss Claudio Ranieri</a>
    </div>
<br>
    <div class="tenth_div">
      <h1>
      <a href="news7.php">Antonio Conte is expertly handling Chelsea's transformation</a>
    </div>
<br>
    <div class="eleventh_div">
      <h1>
      <a href="news8.php">Dele Alli ruled out for 'few weeks' with knee injury picked up in training</a>
    </div>
<br>
    <div class="twelfth_div">
      <h1>
      <a href="news9.php">Everton's Muhamed Besic progressing well after knee surgery</a>
    </div>
<br>
    <div class="thirteenth_div">
      <h1>
      <a href="news10.php">Jack Wilshere admits he is unsure over his long-term future at Arsenal</a>
    </div>
<br>

	</section>
	
	
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
