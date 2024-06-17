<?php

namespace src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\subscription;

class Subscription
{
    // time stamp data
    private int $timeStamp = 1718612206;

    private bool $active = true;


    /**
     * @param $user
     * @param $product
     * @return bool
     */
    public function findByUserProduct($user, $product): bool
    {
        if ($user->getUid() === 1 && $product->getPid() === 1) {
            return true;
        }
        return false;
    }

    public function checkExpireDate(): bool
    {
        $nowDateTimeStamp = time();
        if ($nowDateTimeStamp > $this->timeStamp) {
            return true;
        }
        return false;
    }

    public function isActive(): bool
    {
        return $this->active;
    }
}