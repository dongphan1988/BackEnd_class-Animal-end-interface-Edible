<?php
include_once "Animals/Chicken.php";
include_once "Animals/Tiger.php";
include_once "Fruits/Apple.php";
include_once "Fruits/Orange.php";

echo ('---- Animals<br>');

$animals[0] = new Tiger();
$animals[1] = new Chicken();
foreach ($animals as $index=>$animal){
    echo $animal->makeSound(). '<br>';
        if($animal instanceof Chicken){
        echo $animal->howToEat() . '<br>';
    }
}

echo ('---- Fruits<br>');

$fruit[0]= new Apple();
$fruit[1]= new Orange();

foreach ($fruit as $index =>$frui){
    echo $frui->howToEat()."<br>";
}

?>