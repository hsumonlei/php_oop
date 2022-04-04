<?php

class Drinks
{
    // var $name = "EST";
    // var $price = 30 ;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        echo $this->name."<br/>";
    }

    function setPrice($price){
        $this->price = $price;
    }

    function getPrice(){
        echo $this->price."<br/>";
    }
}

// $some_drink = new Drinks();
// print "<pre>";
// print_r($some_drink);
// exit();

$some_drink = new Drinks();

$some_drink->setName("Cola");
$some_drink->setPrice(25);

print "<pre>";
$some_drink->getName();
$some_drink->getPrice();

echo "<br/>";
echo $some_drink->price;
echo $some_drink->name;
exit();
