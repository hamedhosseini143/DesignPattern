<?php

namespace src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess;


abstract class Verifier
{
    /**
     * @var Verifier|null
     */
    private Verifier|null $nextVerifier;

    /**
     * @param Verifier|null $nextVerifier
     */
    public function __construct(?Verifier $nextVerifier)
    {
        $this->nextVerifier = $nextVerifier;
    }

    /**
     * @param Product $product
     * @param User $user
     * @return bool
     */
    public function verify(Product $product, User $user): bool
    {
        if (!$this->nextVerifier)
        {
            return true;
        }
        return $this->nextVerifier->verify($product, $user);
    }

}
