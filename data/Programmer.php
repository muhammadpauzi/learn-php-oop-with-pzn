<?php

namespace Data;

// polymorphism
class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FrontendProgrammer extends Programmer
{
}

class BackendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer; // this is polymorphism

}

function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof Programmer) {
        echo "Hello programmer $programmer->name" . PHP_EOL;
    }
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello backend programmer $programmer->name" . PHP_EOL;
    }
    if ($programmer instanceof FrontendProgrammer) {
        echo "Hello frontend programmer $programmer->name" . PHP_EOL;
    }
}
