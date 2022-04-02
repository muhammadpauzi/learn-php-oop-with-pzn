<?php 
namespace Data;

interface HasBrand {
    function getBrand():string;
}

interface IsMaintenance {
    function isMaintenance():bool;
}

// interface Car extends HasBrand, isMaintenance {}
interface Car extends HasBrand {
    function drive() : void;
    function getTire() : int;
}

// class BMW extends Manager implements Car, X, Y {}
class BMW implements Car, IsMaintenance {
    public function drive():void{
        echo "Drive BMW" . PHP_EOL;
    }

    public function getTire():int{
        return 4;
    }

    public function getBrand():string{
        return "BWM blabla.."
    }

    public function isMaintenance():bool{
        return false;
    }
}