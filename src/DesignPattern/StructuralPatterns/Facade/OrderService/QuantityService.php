<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;

class QuantityService
{
    /**
     * @param Product $product
     * @return bool
     */
    public function check(Product $product): bool
    {
        return true;
    }
}
