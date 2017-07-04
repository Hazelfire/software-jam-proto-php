<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin Login - BHS SRC</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
			
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
       	<h1 style="text-align:center;">SRC Admin Login </h1>

        <form style="text-align:center;" action="adminpage.php" method="post">
        <br>
        <b>Password:<br></b>
        <input type="password" name="password">
        <br><br>
        <input type="submit">
        </form>

 </div>
	</body>
</html>
