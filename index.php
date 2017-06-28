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
				text-align: left;
			}
			
			.contentbox {
				padding: 10px;
				position:relative;
				top:130px;
				margin-left:12%;
				width:76%;
				background-color:white;
				color:black;
				box-shadow: 0px 0px 10px 6px #9e9e9e;
				z-index:-1;
				margin-bottom:15px;
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
		<div class="contentbox">
			<div class="element">
			<center><table>
				<tr>
					<td>
						<center><h2>Leadership Group</h2>
						<a href="images/srcleadership.JPG"><img src="/images/srcleadership.JPG" style="width:60%;"></a>
						<p style="margin-top:-4px; font-size:10px;font-family:arial;">2nd Row L-R: Ms Rennai McCarthy,  Ms Lee Suter,  Ms Sandra Eglezos<br>
						Front Row L-R: Mikayla Nicholson,  Rachel Beattie,  Nate Mitchell,  Rosemary Ingwersen</p></center>
					</td>
					<td>
						<center><h2>Our Members</h2>
						<a href="images/srcleadership.JPG"><img src="/images/srcleadership.JPG" style="width:60%;"></a>
						<p style="margin-top:-4px; font-size:10px;font-family:arial;">Caption<br>Caption</p></center>
					</td>
				</tr>
			</table></center>
	
			</div>
		</div>
		<div class="contentbox">
			<center><a href="http://sharepoint.bhs.vic.edu.au/" target="_blank"><img src="/images/sharepoint_logo.png" style="width:60px;padding-right:15px;"></a>
			<a href="https://bhs-vic.compass.education/login.aspx?sessionstate=disabled" target="_blank"><img src="/images/compass_logo.png" style="width:60px;"></a></center>
		</div>
		
		<div class="contentbox">
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
					?><div class="newselement"><h4 class="newstitle" style="margin-top:15px;font-family:'Lato', sans-serif;"><?php echo $row["Title"]; ?></h4>
					<p style="font-size:10px;margin-bottom:8px;font-family:arial;"><?php echo date("D dS F Y" ,strtotime($row["Date"])); ?></p>

						<p style="margin-top:5px;margin-bottom:5px;font-family:arial;"><?php echo $row["Description"]; ?></p><hr /></div>
					<?php
					}
				?>
			</div>
			</div>
		<div class="contentbox">
			<div id="about">
				
				<h2>Aim</h2>
					<p style="font-family:arial;">We represent the student views and concerns and aim to improve the school
					surroundings, as well as the student learning environment.</p>
					<br>
					<h2>About Us</h2><br>
					<p style="font-family:arial;"><b>The SRC meets every Thursday lunchtime in LC08.</b></p><br>
					<p style="font-family:arial;">The council is made up of a diverse group of students from all year levels, who are
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
