<?php
interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new class implements HelloWorld
{
    public function sayHello(): void
    {
        echo "Hello World" . PHP_EOL;
    }
};

$helloWorld->sayHello();
