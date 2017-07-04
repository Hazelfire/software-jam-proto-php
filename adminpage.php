<!DOCTYPE html>
<?php
$ADMINPASSWORD = "password";
?>
<html>
	<head>
		<title> SRC Admin Page - Event </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
    	</style>
	</head>
<body>
	<header>
			<div id='title-bar'>
				<div class='image'><img src="images/bhs_Logo.png" class="bhslogo" /></div>
				<div class='image'><img src="images/logo.png" class="logo" /></div>
				<div class='title'><span>BHS SRC Admin Page</span></div>
			</div>
	</header>
<?php

if($_POST["password"] === $ADMINPASSWORD){
?>
	<div class="contentbox" style="text-align:center;">
			<h1 > UPLOAD EVENT </h1>
			<br><br><br>
			<h2> EVENT </h2>

			<form action="submitevent.php" method = "post">
			<b>Title<br><b>
			<input type="text" name="title">
			<br><br>
			<b>Date<br><b>
			<input type="date" name="date">
			<br><br>
			<b>Description<br><b>
			<input style="height: 200px; width: 500px;" type="text" name = "description">
			<br><br>
			<input type="submit" value="upload" style="font-size: 48px">
			</form>
    </div>
<?php }else{ ?>
<div class="contentbox" style="text-align:center;">
    <p>You are not permitted to access this webpage</p>
</div>
<?php

}?>
</body>
</html>
