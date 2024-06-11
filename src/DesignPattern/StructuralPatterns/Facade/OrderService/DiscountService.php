<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;

class DiscountService
{

    /**
     * @param Product $product
     * @return bool
     */
    private function isValid(Product $product): bool
    {
        return true;
    }

    /**
     * @param string $discountCode
     * @param $totalPrice
     * @return float
     */
    public function apply(string $discountCode, $totalPrice): float
    {
         if ($discountCode === 'DISCOUNT') {
                return $totalPrice * 0.9;
         }

         return $totalPrice;
    }
}
