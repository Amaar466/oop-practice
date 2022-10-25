<?php
// class class1 
// {
//     public function __construct()
//     {
//         $this->num=1;
//         //echo "conts";
//     }
    
//     public function fun1()
//     {
//         echo "fun1";
//     }
// }

// class class2 extends class1 
// {
//     public function __construct()
//     {
//         parent::__construct();
//         // $this->num=3;
//         echo "<br />";
//         echo "conts2"; 
//     }
// }
// $obj=new class2();
// echo "<br />";
// //  $obj->fun1();
// echo $obj->num;

// exmaple with public and protected function

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
    protected function cricket()
    {
        echo "pak";
        
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "I am a fruit or a berry? "; 
      echo "<br />";
      $this->cricket();
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  echo "<br />";
  $strawberry->intro();
  echo "<br />";
//   $strawberry->cricket();

?>