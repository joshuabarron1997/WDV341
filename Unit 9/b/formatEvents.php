<?php
	//Get the Event data from the server.
	require '../dbConnect.php';
	try {
		$content =  "";
		$sql = "SELECT *, DATE_FORMAT(event_date, '%M %d %Y') AS event_date FROM wdv341_event_format ORDER BY event_date desc ";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		while ($row = $stmt->fetch()){
			$name = $row["event_name"] . " ";
			$presenter = $row["event_presenter"] . " ";
			$desc = $row["event_description"] . " ";
			$time = $row["event_time"] . " ";
			$date = $row["event_date"] . " ";
			$today = date("y/m/d");
			$modifier = "";
			if(strtotime($today) < strtotime($date)){
				$modifier .= "italic ";
			}
			if (date("m") == date("m", strtotime($date))){
				$modifier .= "red";
			}
			$content .= 
			"<p>
				<div class='eventBlock'>	
					<div>
						<span class='displayEvent " . $modifier . "'>Event: " . $name. "</span>
						<span>Presenter: " . $presenter . "</span>
					</div>
					<div>
						<span class='displayDescription'>Description: " . $desc . "</span>
					</div>
					<div>
						<span class='displayTime'>Time:" . $time . "</span>
					</div>
					<div>
						<span class='displayDate'>Date:" . $date . "</span>
					</div>
				</div>
    		</p>";

		}
	} catch (PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Intro PHP  - Display Events Example</title>
    <style>
		.eventBlock{
			width:500px;
			margin-left:auto;
			margin-right:auto;
			background-color:#CCC;	
		}
		
		.displayEvent{
			text_align:left;
			font-size:18px;	
		}
		
		.displayDescription {
		}
		.red {
			font-weight: bold;
			color: red;
		}
		.italic {
			font-style: italic;
		}
	</style>
</head>

<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Example Code - Display Events as formatted output blocks</h2>   
    <h3>??? Events are available today.</h3>
<?php
	//Display each row as formatted output in the div below
	echo $content;
	//Close the database connection	
	$pdo->connection = null;
?>
</div>	
</body>
</html>