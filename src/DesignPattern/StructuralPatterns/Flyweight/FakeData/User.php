<?php

namespace src\DesignPattern\StructuralPatterns\Flyweight\FakeData;

class User
{
    private string $firstName;
    private string $lastName;

    private UserProfile $profile;

    public function __construct(string $firstName, string $lastName, UserProfile $profile)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->profile = $profile;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getProfile(): UserProfile
    {
        return $this->profile;
    }

}