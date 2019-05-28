<?php

  $people[] = "Steve";
  $people[] = "John";
  $people[] = "Kathy";
  $people[] = "Evan";
  $people[] = "Anthony";
  $people[] = "Tom";
  $people[] = "Rhonda";
  $people[] = "Hal";
  $people[] = "Ernie";
  $people[] = "Johanna";
  $people[] = "Farrah";
  $people[] = "Linda";
  $people[] = "Shawn";
  $people[] = "Olivia";
  $people[] = "Derek";
  $people[] = "Amanda";


// Get Query String
  $q = $_REQUEST['q'];

  $suggestion = "";

  if($q != "") {
    $q = mb_strtolower($q);
    $len = strlen($q);

    foreach ($people as $person) {
      if(stristr($q, substr($person, 0, $len))){
        if($suggestion === "") {
          $suggestion = $person;
        } else {
          $suggestion .= ", $person";
        }
      }
    }
  }

  echo $suggestion === "" ? "No Suggestion" : $suggestion;

 ?>
