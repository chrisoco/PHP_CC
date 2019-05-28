<?php

  // Set new Cookies
  setcookie('username', 'Frank', time() + 3600);

  // Delete Cookie
  setcookie('username', 'xyz', time() - 1);

  if(isset($_COOKIE['username']))
    echo 'User '. $_COOKIE['username'].' is set<br>';
  else
    echo 'User is not Set';

  if(count($_COOKIE) > 0) echo 'There are : '. count($_COOKIE);

 ?>
