<?php

namespace app\src\DesignPattern\Facade\OrderService;

use app\src\DesignPattern\Facade\OrderService\Product;

class DiscountService
{

    private function isValid(Product $product): bool
    {
        return true;
    }

    public function apply( string $discountCode): float
    {
         if ($discountCode === 'DISCOUNT') {
             return 0.1;
         }

         return 0;
    }
}
