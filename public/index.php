<?php
include "../src/Animal.php";
include "../src/Cat.php";
include "../src/Dog.php";
$chat=new Animal();
$chat->setname("Felix");
$chat->setAge(12);
$chat->setGender("male");

$chat2 = new Animal();
$chat->setname("Minette");
$chat->setAge(2);
$chat->setGender("femelle");

$chat3 = new Cat();
$chat3->setname("Garfield");
$chat->setAge(69);
$chat->setGender("male");

$tabCat=array($chat,$chat2);

/**echo "<pre>";
var_dump($tabCat);
echo "</pre>";*/

$depart = 0;
$fin = 0;
$fin=count($tabCat);

while ($depart < 3){
    echo $depart . "<br>";
    $depart++;
}

for ($departFor= 0; $departFor <= 1; $departFor++){
    echo $departFor . "<br>";
}

foreach ($tabCat as $cat){
    echo $cat->getName() ."<br>";
}