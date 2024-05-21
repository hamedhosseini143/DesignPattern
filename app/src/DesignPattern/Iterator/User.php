<?php

namespace app\src\DesignPattern\Iterator;

class User
{

    private readonly string $name;
    private readonly string $age;

    public function __construct(string $name, string $age)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function getUserInfo():string
    {
        return "Name: {$this->name} Age: {$this->age}";
    }
}
