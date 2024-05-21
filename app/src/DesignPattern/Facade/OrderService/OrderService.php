<?php

namespace app\src\DesignPattern\Facade\OrderService;

use app\src\DesignPattern\Facade\OrderService\DiscountService;
use app\src\DesignPattern\Facade\OrderService\Product;
use app\src\DesignPattern\Facade\OrderService\QuantityService;

class OrderService
{
    private $queueService;
    private $discountService;

    /**
     * @param QuantityService $queueService
     * @param DiscountService $discountService
     */
    public function __construct(QuantityService $queueService, DiscountService $discountService)
    {
        $this->queueService = $queueService;
        $this->discountService = $discountService;
    }

    public function register(Product $product)
    {
        if ($this->queueService->check($product) && $this->discountService->apply($product)) {
            return true;
        }

        return false;
    }
}
