<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload n' State</title>
</head>
<body>
  <?php
    session_start();
    session_unset();
    session_destroy();

    if (empty($_SESSION)) {
      echo "<p>Welcome Guest</p><br>";
      echo "<a href='SessionPostPage-1.php'>Go to Page 1</a><br>";
    }

  ?>
</body>
</html>