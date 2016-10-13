<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
</head>

<body>
	<?php
	
	$target_dir = "uploads/";
	function addTojson()
	{
		echo "hello ".$_POST["schoolname"];
	}
	if(isset($_POST['schoolname']))
	{
	   $schoolname = $_POST["schoolname"];
	   $address = $_POST["address"];
	   
	   $uploadOk = 1;
	   $target_file = $target_dir . basename($_FILES['logo']['name']);
	   $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	   $check = getimagesize($_FILES['logo']['tmp_name']);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	   
	   echo $schoolname;
	   file_put_contents('SchoolRecords.json', json_encode("SchoolName:".$schoolname.", Address:".$address));	//write to json file
	   //file_put_contents('SchoolRecords.json', json_encode("SchoolName:".$schoolname.", Address:".$address);
	} 
	?>
</body>

</html>