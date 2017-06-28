<html>
<body>
	<?php
	
		$servername = "localhost";
     		$username = "src";
     		$password = "SRCBelmont2017";
        	$database = "src";

		$title = mysql_escape_mimic($_POST["title"]);
		$uploadDate = date("Y-m-d");
		$date = $_POST["date"];
		$description = mysql_escape_mimic($_POST["description"]);

      		$conn = new mysqli($servername, $username, $password, $database);
		$query = "INSERT INTO Events (Title, UploadDate, Date, Description) VALUES ('$title', '$uploadDate', '$date', '$description')";

		if ($conn->query($query) === TRUE) {
    			echo "New record created successfully";
		} else {
   			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	?>
</body>
</html>