<?php

namespace src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess;

use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Verifirers\SubscriptionActiveVerifier;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Verifirers\SubscriptionExpireVerifier;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Verifirers\SubscriptionUserActive;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Verifirers\SubscriptionVerified;

class AccessVerifier
{
    /**
     * @param User $user
     * @param Product $product
     * @return void
     */
    public function verify(User $user, Product $product) : void
    {
        $verify =  $this->buildVerificationChain()->verify($product, $user);
        if ($verify)
        {
            echo "User {$user->getUserName()} can access product {$product->getProductName()}";
        }
        else
        {
            echo "User {$user->getUserName()} can not access product {$product->getProductName()}";
        }
    }

    /**
     * @return Verifier
     */
    private function buildVerificationChain() : Verifier
    {
        $activeVerifier = new SubscriptionActiveVerifier();
        $expirationVerifier = new SubscriptionExpireVerifier($activeVerifier);
        $subscriptionVerifier = new SubscriptionVerified($expirationVerifier);
        return new SubscriptionUserActive($subscriptionVerifier);
    }
}