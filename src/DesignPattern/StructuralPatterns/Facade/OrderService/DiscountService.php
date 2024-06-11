<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;

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
