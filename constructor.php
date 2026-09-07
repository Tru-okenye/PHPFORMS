<?php
class Student{
    // properties
    public $name;
    public $age;
    // method
    public function __construct($name, $age){
        $this ->name = $name;
        $this -> age = $age;
        echo "student $name created";
    }
    public function greet(){
        echo "hello my name is ". $this -> name . " I am ".$this -> age;
    }
}
$student= new Student("john", 23);
echo "<br>";
$student= new Student("mary", 23);
echo "<br>";
// $student->name= "joy";
// $student->age= 22;
$student-> greet();

?>