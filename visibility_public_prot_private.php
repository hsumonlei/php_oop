<?php
class Myclass{

    public $public_name = "public";
    protected $protected_name = "protected";
    private $private_name = "private";

    public function publicFunction($public_name)
    {
        echo "<br/> This is". $public_name;
        return ("public function");
    }

    protected function protectedFunction($protected_name)
    {
        echo "<br/> This is". $protected_name;
        return ("protected function");
    }

    private function privateFunction($private_name)
    {
        echo "<br/> This is". $private_name ;
        return ("private function");
    }
}

$obj = new Myclass();
//accessing public data
echo $obj->public_name = 'public Data';
//accessing protected data
// echo $obj->protected_name = 'protected Data'; //show error and  can access only child class
// ////accessing private data
// echo $obj->private_name = 'private Data'; // show error and can access only from this class

var_dump($obj->publicFunction('public Data'));