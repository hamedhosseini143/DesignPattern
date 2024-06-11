<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;

class StockService
{
    public function checkStock(Product $product): bool
    {
        return true;
    }
}
