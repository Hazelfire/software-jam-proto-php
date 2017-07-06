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

           $("<tr><td>" + title + "</td><td>" + date + "</td><td>" + description + "</td><td><input type='button' onclick='removeEvent()' value='remove'></input></td></tr>").insertBefore("#events tr:last");

           $.post("submitevent.php", {"title": title, "date": date, "description": description});

        }
        function removeEvent(){
            let eventRow = event.target.closest("tr");
            let title = $(eventRow).children().first().text();
            $.post("deleteevent.php", {"title": title});
            
            $(eventRow).remove();
        }
        
        function addNews(){
           let title = $("#newnewstitle").val();
           let description = $("#newnewsdescription").val();

           $("<tr><td>" + title + "</td><td>" + description + "</td><td><input type='button' onclick='removeNews()' value='remove'></input></td></tr>").insertBefore("#news tr:last");

           $.post("submitnews.php", {"title": title, "description": description});

        }

        function removeNews(){
            let newsRow = event.target.closest("tr");
            let title = $(newsRow).children().first().text();
            $.post("deletenews.php", {"title": title});
            
            $(newsRow).remove();
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
    </div>
    <div class="contentbox" style="text-align:center;">
    <br><br><br>
			<h2> News </h2>
<?php
            $conn = new mysqli($host, $username, $password, $database);

            $query = "SELECT * FROM News ORDER BY Date ASC";
            $result = $conn->query($query);
?>
            <table id="news" style="text-align:left">
            <?php

            while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row["Title"]."</td><td>".$row["Description"]."</td>";

                // Remove news button
                echo "<td><input type='button' onclick='removeNews()' value='remove'></input></td></tr>";
            }
            ?>
            <tr>
                <td>
                    <input id="newnewstitle" type="text"/>
                </td>
                <td>
                    <textarea id="newnewsdescription" > </textarea>
                </td>
                <td>
                    <input type="button" value="add" onclick="addNews()" />
                </td>
            </tr>
            </table>
</div>
<?php }else{ ?>
<div class="contentbox" style="text-align:center;">
    <p>You are not permitted to access this webpage</p>
</div>
<?php

}?>
</body>
</html>
