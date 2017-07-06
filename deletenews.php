<?php
	
		$servername = "localhost";
        $username = "src";
        $password = "SRCBelmont2017";
        $database = "src";
        
        $conn = new mysqli($servername, $username, $password, $database);

		$title = mysqli_real_escape_string($conn, $_POST["title"]);

		$query = "DELETE FROM News WHERE Title='$title'";

		if ($conn->query($query) === TRUE) {
            echo "deleted successfully";
		} else {
   			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
