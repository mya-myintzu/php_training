<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload Images</title>
</head>

<body>
	<h1>Upload Image</h1>
	<?php
	if (isset($_POST['img_submit'])) {
		$img_name = $_FILES['img_upload']['name'];
		$tmp_img_name = $_FILES['img_upload']['tmp_name'];
		$folder = $_POST['folder'];

		move_uploaded_file($tmp_img_name, "$folder/$img_name");
	}

	?>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="img_upload"><br>
		<label for="folder">Folder Name</label><br>
		<input type="text" name="folder"><br>
		<input type="submit" name="img_submit">
	</form>
</body>

</html>