<?php
$msg = "";
if(isset($_GET["msg"])){
	$msg = $_GET["msg"];
}
	require '../dbConnect.php'; //access and run this external file
	//prepared statement
	try{
		$content = "";
		$sql = 'SELECT * FROM wdv341_events';
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		while ($row = $stmt->fetch()){
			$id = $row["event_id"];
			$name = $row["event_name"];
			$desc = $row["event_description"];
			$presenter = $row["event_presenter"];
			$content .= "<tr><td>".$id."</td><td>".$name."</td><td>".$desc."</td><td>".$presenter."</td></tr>";
		}
		$content = "<table><tr><th>Event ID</th><th>Event Name</th><th>Event Description</th><th>Event Presenter</th></tr>".$content."</table>";
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
	<form action = "../../Unit 12/deleteEvent.php" method = "get">
	
		<p>Delete row of ID: <input type = "text" name = "id"></p>
		<input type = "submit" name = "submit" value = "Delete">
		<div><?php echo $msg;?></div>
	</form>
</body>
</html>
