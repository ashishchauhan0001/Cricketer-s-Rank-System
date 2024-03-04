<!DOCTYPE html>
<html>
<head>
	<title>ICC Rankings</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script>
	$(window).on('scroll', function(){
		  if($(window).scrollTop()){
			$('nav').addClass('black');
		  }
		  else {
		$('nav').removeClass('black');
	  }
	})
</script>
</head>

<body>
	<!----hero Section start---->
	<div class="hero">
		<nav>
			<h2 class="logo">ICC<span>&nbsp;RANKINGS&nbsp</span></h2>
			<ul>
				<li class="btni"><a href="https://www.icc-cricket.com/rankings/mens/player-rankings/t20i">Home</a></li>
				<li class="btni"><a href="#">About Us</a></li>
				<li class="btni"><a href="ChatBot/chat.html">Chat Support</a></li>
				<li class="btni"><a href="#tables">Rankings</a></li>
				<li class="btni"><a href="LOGIN/register.php">Log in</a></li>
			</ul>
			<a href="#" class="btn">Join Us</a>
		</nav>
		<div class="content">
			<h4>Here you can see</h4>
			<h1>ICC <span> Rankings</span></h1>
			<h3>of all formats</h3>
			<div class="newslatter">
				
			</div>
		</div>
	</div>

	

	
		<!-- Rankings Tables  -->
       <section class="rankings">

	   
		<center><p style="color:#190870;font-size:75px;Margin:60px">RANKINGS</p></center>
		<section class="tables" id="bat">
			<table class="rank">
				<tr>
					<th>BATTING</th>
						
               </tr>
			<tr>
			<th>Name</th>
			<th>Country</th>
			<th>Rank</th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "root", "", "project");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT Name,country,rank FROM batsman";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["country"] . "</td><td>"
			. $row["rank"]. "</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
			?>
			</table>
			<table class="rank">
			<tr>
					<th>BOWLING</th>
						
               </tr>
			<tr>
			<th>Name</th>
			<th>Country</th>
			<th>Rank</th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "root", "", "project");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT Name,country,rank FROM bowler";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["country"] . "</td><td>"
			. $row["rank"]. "</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
			?>
			</table>
			
			<table class="rank">
			<tr>
					<th>ALL ROUNDERS</th>
						
               </tr>
			<tr>
			<th>Name</th>
			<th>Country</th>
			<th>Rank</th>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "root", "", "project");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT Name,country,rank FROM allrounder";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["country"] . "</td><td>"
			. $row["rank"]. "</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
			?>
			</table>
			</section>
			</section>

	<!----About section start---->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 80px; padding: 50px;color:rgb(26, 26, 87)">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="/DSW_PROJECT/Demo/Images/Teams.webp">
				</div>
				<div class="side-text">
					<h2>Things About History Of ICC:</h2>
					<p>The International Cricket Council (ICC) is the world governing body of cricket. Headquartered in Dubai, United Arab Emirates, its members are 108 national associations, with 12 Full Members and 96 Associate Members. Founded in 1909 as the Imperial Cricket Conference, it was renamed the International Cricket Conference in 1965, and took up its current name in 1987.

The ICC has 108 member nations currently: 12 Full Members that play Test matches, and 96 Associate Members.[5] The ICC is responsible for the organisation and governance of cricket's major international tournaments, most notably the Cricket World Cup and the T20 World Cup. It also appoints the umpires and referees that officiate at all sanctioned Test matches, One Day Internationals and Twenty20 Internationals. It promulgates the ICC Code of Conduct, which sets professional standards of discipline for international cricket,[6] and also co-ordinates action against corruption and match-fixing through its Anti-Corruption and Security Unit (ACSU).</p>
				</div>
		</div>
	</div>


		</center>

	<!------Contact Me------>
	<div class="contact-me">
		<p>If you want to give us some feedback</p>
		<a class="button-two" href="#">click here</a>
	</div>

	<!------footer start--------->
	<footer>
		<p>Internationl Cricket Council(ICC)</p>
		<p>For more updates - please click on the link below to subscribe our social median platfroms</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">CopyRight By ICC</p>
	</footer>
</body>
</html>