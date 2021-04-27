<?php

$productObj = new stdClass();
class ProductContainer {
	/////////
	//properties
	/////////
	public $productName;
	public $productPrice;
	public $productPageCount;
	public $isbn;
	
	/////////
	//constructor
	/////////
	function __construct($name, $price, $count, $isbn){
		$this->productName = $name;
		$this->productPrice = $price;
		$this->productPageCount = $count;
		$this->isbn = $isbn;
	}
	/////////
	//setters
	/////////
	function set_name($name){$this->productName = $name;}
	
	function set_price($price){$this->productPrice = $price;}
	
	function set_count($count){$this->productPageCount = $count;}
	
	function set_isbn($isbn){$this->isbn = $isbn;}
	/////////
	//getters
	////////
	function get_name(){return $this->productName;}
	
	function get_price(){return $this->productPrice;}
	
	function get_count(){return $this->productPageCount;}
	
	function get_isbn(){return $this->isbn;}
}
$name = "PHP Textbook";
$price = 129.95;
$count = 327;
$isbn = "13-1234435690";
$product = new ProductContainer($name, $price, $count, $isbn);

	
//$productObj->productPrice = "$1.99";
//
$returnObj = json_encode($product);	//create the JSON object
//	
echo $returnObj;							//send results back to calling program


?>