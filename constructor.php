<?php
class Animal
{
    public function __construct($name)
    {
        echo "Create animal object ".$name."<br/>";
    }

    public function __destruct()
    {
        echo "Destruct class";
    }
}

$cat = new Animal('cat');
$dog = new Animal('dog');

