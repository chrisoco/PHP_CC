<?php

  if(isset($_POST['submit'])) {
    session_start();

    $_SESSION['name']  = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php');
  }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Sessions</title>
  </head>
  <body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      <input type="text" name="name" placeholder="Enter Name"><br>
      <input type="text" name="email" placeholder="Enter Name"><br>
      <input type="submit" name="submit" value="Submit"><br>

    </form>

  </body>
</html>
