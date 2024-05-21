<?php

namespace src\DesignPattern\ChainOfResponsibility\ProductAccess;

use App\Models\User;

abstract class Verifier
{
    private Verifier|null $nextVerifier;

    /**
     * @param Verifier|null $nextVerifier
     */
    public function __construct(?Verifier $nextVerifier)
    {
        $this->nextVerifier = $nextVerifier;
    }

    public function verify(Product $product, User $user): bool
    {
        if (!$this->nextVerifier)
        {
            return true;
        }
        return $this->nextVerifier->verify($product, $user);
    }

}
