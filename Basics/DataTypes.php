<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
      // Single
      #  Single
      /* Multiline
      */

      #Variables
      /*
          - Prefix $
          - Start with a letter or an underscore
          - Only letters, numbers and underscores
          - Case sensitive

      */

      #Datatypes
      /*
          - String
          - Integer
          - Floats
          - Boolean
          - Arrays
          - Objects
          - NULL
          "" Parses Value

      */

        echo "Hello World";
        print 'Hi'; // Returns 1

        $output = 'T';
        echo $output;

        $S1 = 'Hi';
        $S2 = 'There';
        echo '<br>' . $S1 . ' ' . $S2;
        echo "<br>$S1 $S2<br>";
        echo '<br>' . 'They\'re there <br>';

        #constant
        define('GREETING', 'Hello Everyone!');
        echo GREETING;

      ?>

  </body>
</html>
