<?php
	session_start();
?>
<!DOCTYPE html>
<?php
    $uri = 'http://api.football-data.org/v1/competitions/398/leagueTable?matchday=38';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token:b488cf70c8184d4c95ba23536cbdf9b1';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
	$response = json_encode($response);
?>

<html>
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="frtcss.css">
	<title>Barclays Premier League Table</title>
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

<script > 

	var x = <?php echo $response ?>;

	x=  JSON.parse(x);
		document.write(x["leagueCaption"] +"</br></br>");
	
	x=x["standing"];
	
	var table=  document.createElement("table");
	table.style.width  = '100px';
    table.style.border = '1px solid black';
	document.body.appendChild(table);
	var tr= document.createElement("tr");
	table.appendChild(tr);
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="Position";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="Club";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="Played";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="Points";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="GF";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="GA";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="GD";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="Wins";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="Draws";
	
	var th=document.createElement("th");
	th.style.border = '1px solid black';
	tr.appendChild(th);
	th.innerHTML="Losses";
	
	for( i= 0 ; i < x.length ; i++){
		var tr=document.createElement("tr");
		table.appendChild(tr);
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["position"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["teamName"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["playedGames"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["points"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["goals"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["goalsAgainst"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["goalDifference"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["wins"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["draws"];
		
		var td=document.createElement("td");
		td.style.border = '1px solid black';
		tr.appendChild(td);
		td.innerHTML=x[i]["losses"];
	}
</script>
<br>

</section>
	
	<aside>
		
	</aside>
	
	<footer>
			<ul class="sponsors">
			<li><a href="https://www.nike.com"><img src="pics/nike.png" class="sponsor"/></a></li>
			<li><a href="http://www.umbro.com/en-ww/"><img src="pics/umbro.png" class="sponsor"/></a></li>
			<li><a href="https://www.adidas.com"><img src="pics/adidas.png" class="sponsor"/></a></li>
			<li><a href="https://www.puma.com"><img src="pics/puma.png" class="sponsor"/></a></li>
		</ul>
	</footer>
	
	
</body>
</html>


<?php            
            else  :?>
            <?php header("Location: index.php");?>
            <?php endif ?>
