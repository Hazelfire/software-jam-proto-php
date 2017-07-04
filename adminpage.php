<!DOCTYPE html>
<?php
$ADMINPASSWORD = "password";
?>
<html>
	<head>
		<title> SRC Admin Page - Event </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="jquery-3.2.1.min.js" ></script>
		<script>
        function addEvent(){
           let title = $("#neweventtitle").val();
           let date = $("#neweventdate").val();
           let description = $("#neweventdescription").val();

           $("<tr><td>" + title + "</td><td>" + date + "</td><td>" + description + "</td></tr>").insertBefore("#events tr:last");

           $.post("submitevent.php", {"title": title, "date": date, "description": description});

        }
        function removeEvent(){
            let eventRow = event.target.closest("tr");
            console.log(eventRow);
            let title = $(eventRow).children().first().text();
            console.log(title);
            $.post("deleteevent.php", {"title": title});
            
            $(eventRow).remove();
        }
        </script>
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
			<br><br><br>
			<h2> Events </h2>
<?php
            $host = "localhost";
            $username = "src";
            $password = "SRCBelmont2017";
            $database = "src";

            $conn = new mysqli($host, $username, $password, $database);

            $query = "SELECT * FROM Events ORDER BY Date ASC";
            $result = $conn->query($query);
?>
            <table id="events" style="text-align:left">
            <?php

            while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row["Title"]."</td><td>" . $row["Date"]."</td><td>".$row["Description"]."</td>";

                // Remove event button
                echo "<td><input type='button' onclick='removeEvent()' value='remove'></input></td></tr>";
            }
            ?>
            <tr>
                <td>
                    <input id="neweventtitle" type="text" name="neweventtitle" />
                </td>
                <td>
                    <input id="neweventdate" type="date" name="neweventdate" />
                </td>
                <td>
                    <textarea id="neweventdescription" name="neweventdescription" > </textarea>
                </td>
                <td>
                    <input type="button" value="add" onclick="addEvent()" />
                </td>
            </tr>
            </table>
<?php }else{ ?>
<div class="contentbox" style="text-align:center;">
    <p>You are not permitted to access this webpage</p>
</div>
<?php

}?>
</body>
</html>
