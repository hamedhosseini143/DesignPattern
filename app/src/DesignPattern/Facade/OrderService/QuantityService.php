<?php

namespace app\src\DesignPattern\Facade\OrderService;

use app\src\DesignPattern\Facade\OrderService\Product;

class QuantityService
{
    public function check(Product $product): bool
    {
        return true;
    }
}
