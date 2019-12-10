<?php
class Fruit {
    // Properties
  public $name;
  public $color;

    // Methods
  function set_name($name,$color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name() {
    return $this->name." ". $this->color;

  }
}

$apple = new Fruit();

// creates an object such that it has all the properties and methods of Fruit:
// $apple={
//   public $name;
//   public $color;

//   function set_name($name,$color) {
//     $this->name = $name;
//     $this->color = $color;
//   }

//   function get_name() {
//     return $this->name." ". $this->color;
//   }
// }

$banana = new Fruit();
// same here

$apple->set_name('Apple','Red');
// so when this happens, the following happens:
// $apple={
//   public $name;
//   public $color;

//   function set_name($name='Apple',$color='Red') {
//     $this->name = $name='Apple';
//     $this->color = $color='Red';
//   }

//   function get_name() {
//     return $this->name." ". $this->color;
//   }
// }

// so the name and color variables of $apple object is set as the values passed 
// when calling the set_name method by the apple object
// public $name='Apple';
// public $color='Red';

$banana->set_name('Banana','Yellow');
// same here

echo $apple->get_name();
// then the apple object accessess its get_name method
// such that:

// function get_name() {
//     return $this->name." ". $this->color;
//   =>here the $this->name refers to the 'public $name' of $apple object
//     which was set when set_name was accessed.   
//   }


echo "<br>";
echo $banana->get_name();
?>