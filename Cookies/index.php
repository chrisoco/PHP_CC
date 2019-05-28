<?php

  if(isset($_POST['submit'])) {

    $username = htmlentities($_POST['username']);

    // 1 Hour
    setcookie('username', $username, time()+3600);

    header('Location: page2.php');

  }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      <input type="text" name="username" placeholder="Enter UserName"><br>
      <input type="submit" name="submit" value="Submit"><br>

    </form>

  </body>
</html>
