<?php

namespace src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Verifirers;

use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Product;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\User;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Verifier;

class SubscriptionUserActive extends Verifier
{
    /**
     * @param Product $product
     * @param User $user
     * @return bool
     */
    public function verify(Product $product, User $user): bool
    {
        if ($user->isActive()) {
            return true;
        }
        return parent::verify($product, $user);
    }
}