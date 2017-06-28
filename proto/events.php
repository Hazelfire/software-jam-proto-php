<h1>Upcoming Events</h1>

<?php

$servername = "localhost";
$username = "src";
$password = "SRCBelmont2017";
$database = "SRC";

$conn = new mysqli($servername, $username, $password, $database);

$query = "SELECT * FROM Events";

$result =$conn->query($query);

while($row = $result->fetch_assoc()){
?><h1><?php echo $row["Event name"]; ?></h1>

    <p><?php echo $row["Event description"]; ?></p>
<?php
}

