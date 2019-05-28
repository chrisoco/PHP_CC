<?php
  // Check for posted data
/*
  if(filter_has_var(INPUT_POST, 'data')) {
    echo 'DATA Found';
  } else {
    'No Data';
  }
  */

  if(filter_has_var(INPUT_POST, 'data')) {
    #EMAIL
    // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) echo 'Email is valid';

    // Remove illegal chars
    $email = filter_var($_POST['data'], FILTER_SANITIZE_EMAIL);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) echo 'Email is valid';

    #FILTER_VALIDATE_EMAIL
    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_URL

    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL

  }

  $var = '23a';

  if(filter_var($var, FILTER_VALIDATE_INT)) echo '<br>'. $var.' is Number<br>';
  else echo '<br>'.$var.' not a Number <br>';


  $var = '33jkk2llkj123lkjlkjasd1';
  var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));


  $var = '<script>alert(1)</script>';
  echo '<br>'.filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

  $filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(

        "filter" => FILTER_VALIDATE_INT,
        "options" => array(

          "min_range" => 1,
          "max_range" => 100
        )
    )
  );

echo "<br><br>";
  print_r(filter_input_array(INPUT_POST, $filters));


 ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>



<?php

  $arr = array(
    "name" => "chris",
    "age" => "23",
    "email" => "chris@gmail.com"
  );

  $filters = array(

    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ),
    "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 120
      )
    ),
    "email" => FILTER_VALIDATE_EMAIL

  );

  print_r(filter_var_array($arr, $filters));

 ?>
