<?php
  #Loops

  /*
    - for
    - while
    - do .. while
    - forEach
  */


  for($i = 0; $i < 10; $i++){
    echo $i . '<br>';
  }

// -------------

  $i = 0;
  while ($i <= 10) {
    // code...
    $i++;
  }

// -------------

  $i = 0;
  do {
    // code...
    $i++;
  } while ($i <= 10);

// -------------

  $people = ['Brad', 'Jose', 'Will'];
  foreach ($people as $person) {
    // code...
    echo $person;
  }

// -------------

  $people = ['Brad' => 'brad@gmail.com',
             'Jose' => 'brad@gmail.com',
             'Will' => 'brad@gmail.com'];
  foreach ($people as $person => $email) {
    // code...
    echo $person. ' ' .$email;
  }

 ?>
