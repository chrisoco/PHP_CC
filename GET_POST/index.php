<?php
/*
  if(isset($_GET['name'])) {
    // echo $_GET['name'];
    print_r($_GET);
    // htmlentities($_GET['name']); // Removes Brackets vs Scripters
  }

  if(isset($_POST['name'])) {
    print_r($_POST);
  }

*/
  if(isset($_REQUEST['name'])) {
    print_r($_REQUEST); // Works with GET && POST
    $name = htmlentities($_REQUEST['name']);
  }

echo $_SERVER['QUERY_STRING']; // Full String

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GET_POST</title>
  </head>
  <body>

    <form method="POST" action="index.php"> <!-- GET | POST -->

      <div>
        <label>Name</label><br>
        <input type="text" name="name">
      </div>
      <div>
        <label>EMail</label><br>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">

    </form>

    <ul>
      <li><a href="index.php?name=Brad">Brad</a></li>
      <li><a href="index.php?name=Steve">Steve</a></li>
    </ul>

    <h1><?php echo "{$name}'s Profile'"; ?><h1>

  </body>
</html>
