<?php

namespace src\DesignPattern\StructuralPatterns \Facade\OrderService;

class OrderService
{
    private $queueService;
    private $discountService;

    /**
     * @param QuantityService $queueService
     * @param DiscountService $discountService
     */
    public function __construct(\src\DesignPattern\StructuralPatterns \Facade\OrderService\QuantityService $queueService, \src\DesignPattern\StructuralPatterns \Facade\OrderService\DiscountService $discountService)
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
