<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload n' State</title>
</head>
<body>

	<form action="" method="POST" enctype="multipart/form-data">
		
		<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
		
		<input type="file" name="myFile" />
		<input type="submit" value="Submit" />
		
	</form>

</body>
</html>

<?php

  var_dump($_FILES);

  const InputKey = 'myFile';
  const AllowedTypes = ['text/xml'];

  if (empty($_FILES[InputKey])) die('File Missing');
  if ($_FILES[InputKey]['error'] > 0) die('Error Uploading File');
  if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) die('Invalid File Type');

  $tmpFile = $_FILES[InputKey]['tmp_name'];
  $dstFile = 'uploads/' . $_FILES[InputKey]['name'];

  if (!move_uploaded_file($tmpFile, $dstFile)) die('Error Storing File');
  if (file_exists($tmpFile)) unlink($tmp);



?>