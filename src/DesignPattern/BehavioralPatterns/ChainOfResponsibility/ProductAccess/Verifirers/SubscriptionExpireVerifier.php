<?php

namespace src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Verifirers;

use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Product;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\subscription\Subscription;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\User;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Verifier;

class SubscriptionExpireVerifier extends Verifier
{
    /**
     * @param Product $product
     * @param User $user
     * @return bool
     */
    public function verify(Product $product, User $user): bool
    {
        $subscription = (new Subscription)->findByUserProduct($user, $product);
        if (!$subscription)
        {
            return false;
        }
        return parent::verify($product, $user);
    }
}