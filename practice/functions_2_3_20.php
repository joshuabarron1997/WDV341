<?php 
	function outputFullName1(){
		
	}

	function outputFullName2($inFirstName, $inLastName){
		
		echo "<p>$inFirstName, $inLastName</p>";
		echo $inFirstName . ", " . $inLastName;
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div>
  <h3>Student Roster</h3>
	<?php 
		outputFullName2("Josh", "Barron");
		outputFullName2("Marriane", "Lippold");;
	?>
</div>
	
</body>
</html>