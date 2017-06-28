<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home - BHS SRC</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<style>				
			.element {
				padding-left: 15px;
				padding-right: 15px;
			}
			
			#news {
				padding-left:15px;
				padding-right:15px;
			}
			/*
			.newselement {
				outline-style: solid;
				outline-color: grey;
				outline-width:1px;
				margin-bottom:5px;
			} */
			
			#about {
				padding-left:15px;
				padding-right:15px;
			}
			
			h4.newstitle {
				text-align: center;
			}
		</style>
		
	</head>
	
	<body>
		<header>
			<div id='title-bar'>
				<div class='image'><img src="images/bhs_Logo.png" class="bhslogo" /></div>
				<div class='image'><img src="images/logo.png" class="logo" /></div>
				<div class='title'><span>BHS Student Representative Council</span></div>
			</div>
			<div id="nav-bar">
				<div class='nav-item' onclick='location="index.php"'><span class="pageLink">Home</span></div>
				<div class='nav-item' onclick='location="index.php#about"'><span class="pageLink">About</span></div>
				<div class='nav-item' onclick='location="gallery.html"'><span class="pageLink">Gallery</span></div>
				<div class='nav-item' onclick='location="events.php"'><span class="pageLink">Events</span></div>
				<div class='nav-item' onclick='location="suggestions.html"'><span class="pageLink">Suggestions</span></div>
				<div class='nav-item' onclick='location="contactus.html"'><span class="pageLink">Contact Us</span></div>
			</div>
		</header>
		<div id="content">
			<div class="element">
				<center><h2>Leadership Group</h2>
				<img src="/images/srcleadership.JPG" style="width:400px;">
				<p style="margin-top:-4px; font-size:12px;">Caption</p></center>
			</div>
			<div class="element">
				<center><h2>Our Members</h2>
				<img src="IMAG1337.jpg" style="width:400px;">
				<p style="margin-top:-4px; font-size:12px;">Caption</p></center>
			</div>
			
			<div id="news">
			<h2>SRC News</h2>
				<?php
					$servername = "localhost";
					$username = "src";
					$password = "SRCBelmont2017";
					$database = "src";

					$conn = new mysqli($servername, $username, $password, $database);

					$query = "SELECT * FROM News";

					$result =$conn->query($query);

					while($row = $result->fetch_assoc()){
					?><div class="newselement"><p style="font-size:10px;"><?php echo $row["Date"]; ?></p><h4 class="newstitle"><?php echo $row["Title"]; ?></h4>

						<p style="margin-top:5px;margin-bottom:2px;"><?php echo $row["Description"]; ?></p><hr /></div>
					<?php
					}
				?>
			</div>
			<div id="about">
				
				<h2>AIM:</h2>
					<p>We represent the student views and concerns and aim to improve the school
					surroundings, as well as the student learning environment.</p>
					<br>
					<h2>About Us</h2>
					<p>The SRC meets every Thursday lunchtime in LC08.</p>
					<p>The council is made up of a diverse group of students from all year levels, who are
					passionate about making a difference within the Belmont High School community.
					In our meetings, we discuss all suggestions made by both staff and students. All
					members will then vote on whether or not we continue investigating, and developing the
					idea.<br><br>
					The leaders of SRC then discuss the recommendations from our meetings with Mrs
					Eglezos, receiving her feedback and thoughts. We then report back to the council and the
					students about the final decision. Some suggestions and plans need to be approved by the
					school council (who only meet once a term), which is why it can take a long time for events
					to happen. But whilst we are waiting for further instruction, we focus on other exciting
					changes!</p>
			</div>
		</div>
	</body>
</html>
