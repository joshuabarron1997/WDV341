<?php
	function formatDate(){
		echo date("m-d-Y");
	}
	function formatDate2(){
		echo date("d-m-Y");
	}
	function stringCheck($string){
		echo strlen($string) . "<br>";
		echo $string = trim($string) . "<br>";
		echo strtolower($string) . "<br>";
		
		if (stristr($string, "dmacc")){
			echo "This string contains the string 'dmacc'" . "<br>";
		}
		else{
			echo "This string does not contain the string 'dmacc'" . "<br>";
		}
		
	}

	function formatNum($num){
		echo number_format($num,2);
	}
	function formatCurrency($num){
		echo sprintf('%01.2f', $num);
	}

	function toMoney($val,$symbol='$',$r=2) // format currnecy function does not work on windows and i found this function to 
	{										//remedy that issue.
    $n = $val;
    $sign = ($n < 0) ? '-' : '';
    $i = number_format(abs($n),$r);

    echo $symbol.$sign.$i;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Functions</title>
</head>
<body>
	<p>Local Date: <?php echo formatDate();?></p>
	<p>International Date: <?php echo formatDate2();?></p>
	
	<p>String = DMACC: <?php echo stringCheck("DMACC");?></p>
	<p>String = Ankeny: <?php echo stringCheck("Ankeny");?></p>
	
	<p>Formatted Number: <?php formatNum(1234567890);?></p>
	<p>Formatted Currency: <?php toMoney(123456);?></p>

	
	
</body>
</html>