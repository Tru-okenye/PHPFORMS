<?php
class Student{
    public $name;

    public function greet(){
        echo "hello " . $this-> name;
    }

}

$student1= new Student();
$student1-> name = "john";

echo $student1-> name;
echo "<br>";
$student1->greet();
echo "<br>";
// addition
class Sum{
    public function add($a, $b){
        echo $a + $b;
    }
};
$calc= new Sum();
$calc -> add(5, 3);
?>