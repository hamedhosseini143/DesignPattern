<?php

namespace app\src\DesignPattern\Facade\OrderService;

use app\src\DesignPattern\Facade\OrderService\Product;

class StockService
{
    public function checkStock(Product $product): bool
    {
        return true;
    }
}
