<?php

namespace src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess;

class User
{
    /**
     * @var int
     */
    private int $uid;
    /**
     * @var string
     */
    private string $userName;

    /**
     * @param int $uid
     * @param string $userName
     */
    public function __construct(int $uid, string $userName)
    {
        $this->uid = $uid;
        $this->userName = $userName;
    }

    /**
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

}