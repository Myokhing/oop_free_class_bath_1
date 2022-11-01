<?php
namespace Libs\Database;

class Test
{
 // property 
 // public -> anywhere 
 // protected -> parent  the class and child class
 // private -> withing the class 

 public $name;
 public $age;

 // method 
 public function setName($name)
 {
  $this->name = $name; // pesodu variable 
  return $name;
 }

 public function getName()
 {
  echo $this->name;
 }
}

// object // instance // instai

$object = new Test();

$result = $object->name = "jon";
echo $result; 
echo "<br>";
$re_age = $object->age = 25;
echo $re_age;

echo "<br>";
$set_name = $object->setName("MyoKhaing");
echo $object->getName();