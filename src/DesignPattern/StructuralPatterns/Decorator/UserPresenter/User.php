<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\UserPresenter;

/**
 *
 */
class User implements UserInterface
{
    /**
     * @return string
     */
    private string $firstName;
    /**
     * @var string
     */
    private string $lastName;

    /**
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }


    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
