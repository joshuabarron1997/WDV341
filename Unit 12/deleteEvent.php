<?php
if (!isset($_GET["id"])){
	header( 'Location: ../Unit 9/a/selectEvents.php');
	exit();
}
$id = $_GET["id"];
try {
	require 'dbConnect.php';
	$sql = 'SELECT * FROM wdv341_events WHERE event_id = :i';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam('i', $id);
	$stmt->execute();
	$success = $stmt->rowCount();
	if ($success == 1){
		try{
			$sql = 'DELETE FROM wdv341_events WHERE event_id = :i';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam('i', $id);
			$stmt->execute();
			$msg = "deletion of item ID " . $id . " successful";
			header( "Location: ../Unit 9/a/selectEvents.php?msg=".$msg);
			exit();	
		}
		catch(PDOException $e){
			$msg = "There was an error deleting the item " . $e;
			header( "Location: ../Unit 9/a/selectEvents.php?msg=".$msg);
			exit();
		}
	}
	else{
		$msg = "an item of that ID does not exist";
		header( "Location: ../Unit 9/a/selectEvents.php?msg=".$msg);
		exit();
	}
}
catch(PDOException $e){
	$msg = "Connection failed: " . $e->getMessage();
	header( "Location: ../Unit 9/a/selectEvents.php?msg=".$msg);
	exit();
}



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Event</title>
</head>

<body>
</body>
</html>