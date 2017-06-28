<html>
  <head>
    <title>Events - BHS SRC</title>
    <link href="css/style.css" rel="stylesheet">
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
	    margin-bottom: 5px;
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
	
	<div id="upcoming">
    	<h1 class="eventtitle">Upcoming Events</h1>
	
    	<?php
	
        $servername = "localhost";
     	$username = "src";
     	$password = "SRCBelmont2017";
        $database = "src";

      	$conn = new mysqli($servername, $username, $password, $database);
      
      	if ($conn->connect_error) {
      	die("Connection failed: " . $conn->connect_error);
      	} 

      	$query = "SELECT * FROM Events ORDER BY Date ASC";

      	$result = $conn->query($query);

      	while($row = $result->fetch_assoc()){
          	if (strtotime($row["Date"]) >= time()) {
              	?><div class = "eventelement">
		<h2><?php echo $row["Title"]; ?></h2>
	      	<p><b><?php echo $row["Date"]?></b></p>
              
              	<p><?php echo $row["Description"]; ?></p>
		</div>
          	<?php
	  	}
      	}
    	?>
	</div>
	
	<div class = "past">
    	<h1 class="eventtitle">Past Events</h1>

    	<?php
	$query = "SELECT * FROM Events ORDER BY Date DESC";
      	$result = $conn->query($query);

      	while($row = $result->fetch_assoc()){
          	if (strtotime($row["Date"]) < time()) {
              	?><div class = "eventelement">
		<h2 class="event"><?php echo $row["Title"]; ?></h2>
              	<p><b><?php echo $row["Date"]?></b></p>
              
              	<p><?php echo $row["Description"]; ?></p>
		</div>
          	<?php
	  	}
      	}
    	?>
	</div>
    </div>
  </body>
<html>
