<html>

<body>
<?php
	
		$servername = "localhost";
        $username = "src";
        $password = "SRCBelmont2017";
        $database = "src";
        
        $conn = new mysqli($servername, $username, $password, $database);

		$title = mysqli_real_escape_string($conn, $_POST["title"]);
		$uploadDate = date("Y-m-d");
		$date = $_POST["date"];
		$description = mysqli_real_escape_string($conn,$_POST["description"]);

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
