<?php

  function simpleFunction() {
    echo "Hello World";
  }

  function sayHello($name){
    echo "Hello $name <br>";
  }

  simpleFunction();

  sayHello("Bob");


  function sayHiDefaultName($name = "DEFAULT?"){
    echo "Hello $name <br>";
  }
  sayHiDefaultName();


  function add($num1, $num2) {
    return $num1 + $num2;
  }

  echo add(4, 8);


  // By Reference
  $myNum = 10;

  function addFive($num){
    $num += 5;
  }
  // With Reference!
  function addTen(&$num){
    $num += 10;
  }

  echo "<br>$myNum -> "; // 10
  addFive($myNum);
  echo "<br>$myNum -> "; // 10
  addTen($myNum);
  echo "<br>$myNum -> "; // 20


 ?>
