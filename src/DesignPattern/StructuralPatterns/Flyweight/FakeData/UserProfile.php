<?php

namespace src\DesignPattern\StructuralPatterns\Flyweight\FakeData;

class UserProfile
{
    private string $gender;
    private int $age;
    private string $city;

    /**
     * @param int $age
     * @param string $city
     * @param string $gender
     */
    public function __construct(int $age, string $city, string $gender)
    {
        $this->age = $age;
        $this->city = $city;
        $this->gender = $gender;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }


}