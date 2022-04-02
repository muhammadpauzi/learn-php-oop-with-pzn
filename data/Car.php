<?php 
namespace Data;

interface Car {
    function drive() : void;
    function getTire() : int;
}

// class BMW extends Manager implements Car, X, Y {}
class BMW implements Car {
    public function drive():void{
        echo "Drive BMW" . PHP_EOL;
    }

    public function getTire():int{
        return 4;
    }
}