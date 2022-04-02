<?php

namespace Data\Traits;

trait SayGoodBye
{
    public string $name;

    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye!" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello!" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}


trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}
// 2:31:00 pzn oop tutorial
class ParentPerson
{
    public function goodBye(string $name): void
    {
        echo "Good bye $name in Parent Person" . PHP_EOL;
    }

    public function hello(string $name): void
    {
        echo "Hello $name in Parent Person" . PHP_EOL;
    }
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun;
}

class Person extends ParentPerson
{
    // use SayGoodBye, SayHello, HasName, CanRun {
    //     // hello as private; // method/property visibility overriding
    //     // goodBye as private; // should be error
    // }

    use All;

    public function run(): void
    {
        echo "Person $this->name is running..." . PHP_EOL;
    }

    // public function goodBye(string $name): void
    // {
    //     echo "Good bye $name in Person" . PHP_EOL;
    // }

    // public function hello(string $name): void
    // {
    //     echo "Hello $name in Person" . PHP_EOL;
    // }
}
