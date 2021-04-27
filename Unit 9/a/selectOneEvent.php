<?php 
	require '../dbConnect.php'; //access and run this external file
	//prepared statement
	try{
		$content = "";
		$id = 12;
		$sql = 'SELECT * FROM wdv341_events WHERE event_id = :i';
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam('i', $id); //hard coded selecting id 12
		$stmt->execute();
		//echo $stmt->rowCount();
		while ($row = $stmt->fetch()){
			$name = $row["event_name"];
			$desc = $row["event_description"];
			$presenter = $row["event_presenter"];
			$content .= "<tr><td>".$name."</td><td>".$desc."</td><td>".$presenter."</td></tr>";
		}
		$content = "<table><tr><th>Event Name</th><th>Event Description</th><th>Event Presenter</th></tr>".$content."</table>";
	} catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<?php echo $content;?>
</body>
</html>