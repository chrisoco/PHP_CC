<?php

  $user = [
    'name' => 'brad',
    'email' => 'brad@gmail.com',
    'age' => '34'
  ];

  // Serialize to Store in Cookie
  $user = serialize($user);

  setcookie('user', $user, time() + (86400 * 30));

  // Get Data From Cookie

  $user = unserialize($_COOKIE['user']);

  print_r(['email']);


 ?>
