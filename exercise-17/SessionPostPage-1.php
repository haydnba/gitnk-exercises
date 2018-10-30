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

  <form action="" method="POST" >
    Username: <input type="text" name="username" />
    Password: <input type="password" name="password" />
    Colour: <input type="text" name="color" />
    Animal: <input type="text" name="animal" />
    <input type="submit" value="Login" />
  </form>

  <?php

    if (!empty($_POST)) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['color'] = $_POST['color'];
      $_SESSION['animal'] = $_POST['animal'];
    }

    if (!empty($_SESSION)) {
      echo "Welcome " . $_SESSION['username'] . '<br>';
      echo "You favourite colour is " . $_SESSION['color'] . '<br>';
      echo "You favourite animal is " . $_SESSION['animal'] . '<br>';
      echo "<a href='SessionPostPage-2.php'>Go to Page 2</a><br>";
    }

  ?>

</body>
</html>
