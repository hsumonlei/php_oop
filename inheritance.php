<?php

class Animal{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function run()
    {
        echo "<br/>$this->name is running";

    }
}

class Dog extends Animal{
    public function bark()
    {
        echo "<br/>Woof .........Woof";
    }

}

$bobby = new Dog("Bobby");
$bobby->run();
$bobby->bark();

class Cat extends Animal{
    public function sound()
    {
        echo "<br/>Moew .........Moew";
    }

}

$kitty = new Cat("Kitty");
$kitty->run();
$kitty->sound();