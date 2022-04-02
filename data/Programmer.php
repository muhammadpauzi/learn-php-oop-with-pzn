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
    echo "Hello programmer $programmer->name" . PHP_EOL;
}
