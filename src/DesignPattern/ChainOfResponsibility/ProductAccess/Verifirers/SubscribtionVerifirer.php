<?php

namespace src\DesignPattern\ChainOfResponsibility\ProductAccess\Verifirers;

use App\Models\User;
use src\DesignPattern\ChainOfResponsibility\ProductAccess\Product;
use src\DesignPattern\ChainOfResponsibility\ProductAccess\Verifier;

class SubscribtionVerifirer extends Verifier
{
    public function verify(Product $product, User $user): bool
    {
        
        return parent::verify($product, $user);
    }
}
