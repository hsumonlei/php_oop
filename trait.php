<?php

trait Trait1{
    public function msg1(){
        echo 'trait1 msg1';
    }
}

trait Trait2{
    public function msg2(){
        echo 'trait2 msg2';
    }
}

class useTrait{
    use Trait1;
    use Trait2;
}

$obj = new useTrait();
$obj->msg1();
$obj->msg2();