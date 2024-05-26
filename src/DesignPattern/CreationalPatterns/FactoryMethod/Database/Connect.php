<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Database;
class Connect
{
    private string $userName;
    private string $pass;

    /**
     * @param string $userName
     * @param string $pass
     */
    public function __construct(string $userName, string $pass)
    {
        $this->userName = $userName;
        $this->pass = $pass;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getPass(): string
    {
        return $this->pass;
    }
}