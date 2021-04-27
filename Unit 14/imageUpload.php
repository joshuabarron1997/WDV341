<?php
if (isset($_POST["submit"])){
//////////////////////////////IMAGE UPLOADING CODE//////////////////////////////
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
//////////////////////////////IMAGE UPLOADING CODE//////////////////////////////
}

$dir = "images/";
$images = scandir($dir);
print_r($images[2]);
$imageContent = "";
//$imageContent = "<img src=" . $dir . $images[2] . ">";
for ($i = 2; $i < count($images); $i++){
	$imageContent .= "<li><img src=" . $dir . $images[$i] . "></li>";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	#container {
		display: flex;
		flex-direction: row;
	}
	div ul {
		list-style: none;
	}
</style>
</head>

<body>
	<div id = "container">
		<form action = "imageUpload.php" method="post" enctype="multipart/form-data">
			<label for="imageName">Filename:</label>
        	<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" name="submit" value="Upload">

		</form>
		<div><ul>IMAGES UPLOADED<?php echo $imageContent;?></ul></div>
	</div>
</body>
</html>