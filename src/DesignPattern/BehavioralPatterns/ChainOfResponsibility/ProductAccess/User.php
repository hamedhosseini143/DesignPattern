<?php

namespace src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess;

class User
{
    /**
     * @var int
     */
    private int $uid;

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }
    /**
     * @var string
     */
    private string $userName;

    /**
     * @var bool
     */
    private bool $active;


    /**
     * @param int $uid
     * @param string $userName
     * @param bool $active
     */
    public function __construct(int $uid, string $userName, bool $active)
    {
        $this->uid = $uid;
        $this->userName = $userName;
        $this->active = $active;
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

    /**
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }

}