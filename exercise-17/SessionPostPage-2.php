<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload n' State</title>
</head>
<body>

  <?php session_start(); ?>

  <?php

    if (!empty($_SESSION)) {
      echo "Welcome " . $_SESSION['username'] . '<br>';
      echo "You favourite colour is " . $_SESSION['color'] . '<br>';
      echo "You favourite animal is " . $_SESSION['animal'] . '<br>';
      echo "<a href='SessionPostPage-3.php'>Go to Page 3</a><br>";
    }

  ?>
</body>
</html>