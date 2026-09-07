<?php
class Student{
    public $name;

    public function __construct($name){
        $this ->name = $name;
        echo " $name created";

    }
    public function __destruct(){
        echo $this ->name ."  destroyed";

    }
   
}
$student= new Student("joy");

?>