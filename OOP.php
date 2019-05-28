<?php

  class Person {

    public $name;
    private $email;
    public static $ageLimit = 40;


    public function __construct($name, $email) {
      $this->name  = $name;
      $this->email = $email;
      echo __CLASS__.' created<br>';
    }

    public function getEmail(){
      return $this->email;
    }
    public function setEmail($email){
      $this->email = $email;
    }

    public static function getAgeLimit(){
      return self::$ageLimit;
    }

  }

  echo Person::$ageLimit.'<br>';
  echo Person::getAgeLimit().'<br>';

  // $person1 = new Person;
  // $person1->name = 'John Doe';

  // echo $person1->name . '<br>';

  // $person1->setEmail('chris@gmail.com');
  // echo $person1->getEmail() . '<br>';

  $person2 = new Person('Chris', 'chris@gmail.com');

  class Customer extends Person {

    private $balance;

    public function __construct($name, $email, $balance) {

      parent::__construct($name, $email);
      $this->balance = $balance;

      echo __CLASS__.' created';

    }


    public function getBalance(){
      return $this->balance;
    }
    public function setBalance($balance){
      $this->balance = $balance;
    }

  }

$person = new Customer('chris', 'cg@gmail.com', 300);

echo $person->getBalance();
