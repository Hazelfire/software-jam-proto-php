<!DOCTYPE html>
<html>
	<head>
		<title> SRC Admin Page - Event </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
        		#content {
	   			 position:absolute;
	   			 margin-left:12%;
	   			 width:76%;
	   			 background-color:white;
	    			 color:black;
	    			 box-shadow: 0px 0px 6px 6px #9e9e9e;
	   			 font-family: 'Lato', sans-serif;
	   			 z-index:-1;
	   			 padding: 20px;   
	}
	
	.eventtitle {
	    margin-bottom: 10px;
	}

	#upcoming {
	    margin-bottom: 20px;
	}

	.eventelement {
	    margin-left: 30px;
	}
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
	<div id="upload">
			<h1 style="text-align:center;"> UPLOAD EVENT </h1>
			<br><br><br>
			<h2 style="text-align:center;"> EVENT </h2>

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
</body>
</html>