<?php

namespace src\DesignPattern\Facade\OrderService;

class StockService
{
    public function checkStock(Product $product): bool
    {
        return true;
    }
}
