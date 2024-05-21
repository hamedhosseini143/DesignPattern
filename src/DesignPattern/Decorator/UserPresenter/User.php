<?php

namespace src\DesignPattern\Decorator\UserPresenter;

/**
 *
 */
class User
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $lastName;
    /**
     * @var string
     */
    private string $registrationDate;
    /**
     * @var string
     */
    private string $emailAddress;

    /**
     * @param $name
     * @param $lastName
     * @param $registrationDate
     * @param $emailAddress
     */
    public function __construct($name, $lastName, $registrationDate, $emailAddress)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->registrationDate = $registrationDate;
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getRegistrationDate(): string
    {
        return $this->registrationDate;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }


}
