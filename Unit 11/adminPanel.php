<?php
session_start();
if($_SESSION["validUser"] != true){
	header( 'Location: login.php');
	exit();
}
$user = "";
if(isset($_GET["user"])){
	$user = $_GET["user"];
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
<style>
	#container {
		background-color: beige;
		margin: 75px auto 0px auto;
		width: 400px;
		height: 300px;
		text-align: center;
		border: black 2px solid;
	}
</style>
</head>

<body>
	<div id  = "container">
		<h1>Admin Panel</h1>
		<h2>Hello! <span id = "user"><?php echo $user;?></span></h2>
		<p>admin options</p>
		<p>admin options</p>
		<p>admin options</p>
		<p><a href = "logout.php"><input type = "button" value = "log out"></a></p>
	</div>
</body>
</html>