<?php 
	$yourName = "Josh Barron";
	$num1 = 4;
	$num2 = 5;
	$numTotal;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Basics WDV341</title>
	<script>
		<?php
			echo "let testArray = ['PHP', 'HTML', 'Javascript'];";
		?>
	</script>
</head>

<body>
	<?php echo "<h1>PHP Basics</h1>";?>
	<h2><?php echo $yourName;?></h2>
	<p>num1 = <?php echo $num1;?></p>
	<p>num2 = <?php echo $num2;?></p>
	<p>numTotal = <?php echo $numTotal = $num1 + $num2;?></p>
	<script>
		for (let i = 0; i < testArray.length; i++){
			document.writeln(testArray[i] + "<br>");
			}
	</script>
	
</body>
</html>