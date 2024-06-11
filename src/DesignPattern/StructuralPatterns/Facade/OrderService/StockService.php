<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;

class StockService
{
    /**
     * @param Product $product
     * @return bool
     */
    public function checkStock(Product $product): bool
    {
        return true;
    }
}
