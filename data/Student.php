<?php
class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Student id: $this->id, name: $this->name, value: $this->value" . PHP_EOL;
    }

    public function __invoke(...$arguments): void
    {
        $joined = join(', ', $arguments);
        echo "invoke Student wih arguments $joined" . PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample ?? '',
            "version"   => "0.0.1",
        ];
    }
}
