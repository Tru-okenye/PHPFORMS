<?php
class Animal{
    public function eat(){
        echo "eating";
    }
}

class Dog extends Animal{
    public function bark(){
        echo "barking";
    }
}

$dog=new Dog();
$dog->eat();
$dog->bark(); 
echo "<br>";
// properties
class Person{
    public $name;
}
class Leaner extends Person{
    public $course;
}

$leaner= new Leaner();
$leaner->name = "Joe";
$leaner->course = "IT";
echo $leaner->name." is studying ". $leaner->course;
echo "<br>";
// overriding methods
Class Car{
    public function transport(){
        echo "transportation";
    }
}

class Volvo extends Car{
    public function transport(){
        echo "safaris";
    }
}
$volvo= new Volvo();
$volvo->transport();
echo "<br>";

// constructor inheritance
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name= $name;
        $this->color=$color;

        echo "the fruit is $name and its color is $color";
    }
    
}
class Mango extends Fruit{
    public function message(){
        echo "I am a ". $this->name;
    }
}
$mango = new Mango("mango", "yellow");
echo "<br>";
$mango->message()
?>