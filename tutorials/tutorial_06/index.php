<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
		<label>Username</label>
		<input type="text" name="username">
		<br>
		<label>UploadImage</label>
		<input type="file" name='myfile'>
		<br/>
		<input type="submit" value="upload">
	</form>
  <?php
	$user=$_POST['username'];
	$image=$_FILES['myfile'];
	echo "Hello $user <br/>";
	echo "File Name<b>::</b> ".$image['name'];

	move_uploaded_file($image['tmp_name'],"photos/".$image['name']);
	//here the "photos" folder is in same folder as the upload.php, 
	//otherwise complete url has to be mentioned
	?>
</body>

</html>