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
     * @return bool
     */
    public function verify(User $user, Product $product) : bool
    {
        return $this->buildVerificationChain()->verify($product, $user);
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