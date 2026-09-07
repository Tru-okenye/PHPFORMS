<?php
    class Student{
        // properties
        public $name;
        public $age;
        //method
        public function study(){
            echo "studying";
        }
    };
    $student1= new Student();
    $student1 -> name = "John";
    $student1 -> age = 20;

    echo $student1->name;
    echo "<br>";
    $student1 -> study();

?>