<?php

namespace src\DesignPattern\Facade\OrderService;

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
