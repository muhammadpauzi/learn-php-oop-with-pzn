<?php

class Zero
{
    private array $properties = [];
    // public string $firstName = "Oji";

    public function __get($name)
    {
        // echo "Access property $name" . PHP_EOL;
        // return "CONTOH"; // default value if the property does not have default value

        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        // echo "Set property $name with value `$value`" . PHP_EOL;

        return $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        // echo "Isset property $name" . PHP_EOL;

        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $joined = join(", ", $arguments);
        echo "Call method $name with arguments $joined" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $joined = join(", ", $arguments);
        echo "Call static method $name with arguments $joined" . PHP_EOL;
    }
}

$zero = new Zero();

// echo $zero->firstName . PHP_EOL;
// $zero->middleName = "middlename";
// echo $zero->middleName . PHP_EOL;
// echo '=======' . PHP_EOL;
// isset($zero->middleName);
// unset($zero->middleName);

$zero->firstName = "Muhammad";
$zero->lastName = "Pauzi";
echo "First name $zero->firstName" . PHP_EOL;
echo "Last name $zero->lastName" . PHP_EOL;

$zero->sayHello('oji', 'test');
Zero::sayStaticHello('static', 'method', '123');
