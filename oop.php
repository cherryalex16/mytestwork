<?php
  class Person
  {
    public $age;
    public $name;
      function  speak()
       {
          echo "hello my name is: " . $this->name;
       }
  }
  $me = new Person();
  $me->age = 35;
  $me->name = 'Asher';
  $me->speak();
  print_r ($me)
  


?>
