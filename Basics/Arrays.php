<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    /*
      - Indexed
      - Associative
      - Multi-Dimensional
     */

     #Indexed
     $people = array('Kevin', 'Jeremy', 'Sara');
     $ids = array(23, 55, 12);
     $cars = ['Honda', 'Toyota', 'Ford'];
     $cars[3] = 'Chevy';
     $cars[] = 'BMW'; // Add to Last Index

     echo count($cars);
     print_r($cars);
     var_dump($cars);

     echo $people[0];

     #Associative Array
     $people = array('Brad' => 35, 'Jose' => 32, 'Will' => 10);
     $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'Will'];

     $people['Jill'] = 42;
     echo $people['Jill'];


     #Multi-Dimensional
     $cars = array(
       array('Honda', 20, 10),
       array('Toyota', 20, 10),
       array('Ford', 20, 10),
     );
     echo $cars[1][0];

     ?>




  </body>
</html>
