<?php
	//this php file will connect to the wdv431 database
	//it will pull form data from te $_POST variable
	//it will format an INSERT SQL statement
	//it will create a Prepared Statement
	//it will bind the parameters to the Prepared Statment
	//it will execute the prepared statement to insert into the database
	//it will display a success/failure message to the user

	require 'dbConnect.php'; //access and run this external file
	$eventName = "WDV341";
	$eventDescription = "We are inserting into a database.";
	$eventPresenter = "Josh Barron";

	//PDO prepared statements

	//prepare the SQL statement

	//1. Create the SQL statement with name placeholders
	$sql = "INSERT INTO wdv341_events (event_name, event_description, event_presenter)
	VALUES (:eventName, :eventDescription, :eventPresenter)";

	//2.Create the prepared statement object
	$stmt = $conn->prepare($sql); //creates the 'prepared statement' object

	//bind parameters to the prepared statement object

	$stmt->bindParam(':eventName', $eventName);
	$stmt->bindParam(':eventDescription', $eventDescription);
	$stmt->bindParam(':eventPresenter', $eventPresenter);

	//execute the prepared statement

	$stmt->execute();

	


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>