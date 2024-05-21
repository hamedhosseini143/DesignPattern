<?php

namespace app\src\DesignPattern\ChainOfResponsibility\ProductAccess\Verifirers;

use app\src\DesignPattern\ChainOfResponsibility\ProductAccess\Product;
use app\src\DesignPattern\ChainOfResponsibility\ProductAccess\Verifier;
use App\Models\User;

class SubscribtionVerifirer extends Verifier
{
    public function verify(Product $product, User $user): bool
    {
        
        return parent::verify($product, $user);
    }
}
