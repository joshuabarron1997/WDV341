<?php 
	$firstName = "Josh"; //Datatype:String Scope:Global
	$lastName = "Barron";
	
	


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Monday Nights 6-10pm</h2>
	
	<p>Hello World</p>
	
	<h2>Hello, <?php echo $firstName . " " . $lastName;?></h2>
	
	<?php
		echo "<h3>PHP Wrote This Line</h3>";
		echo "<p>PHP paragraph <br> Break line";
		echo "	<ul> List
				<li> Item 1 </li>
				<li> Item 2 </li>
				<li> Item 3 </li>
				</ul>";
	
	
	?>
	
	
	
	<p>This is a paragraph.</p>
	
	
</body>
</html>