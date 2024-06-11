<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;

class OrderService
{
    private QuantityService $queueService;
    private DiscountService $discountService;

    /**
     * @param QuantityService $queueService
     * @param DiscountService $discountService
     */
    public function __construct(QuantityService $queueService, DiscountService $discountService)
    {
        $this->queueService = $queueService;
        $this->discountService = $discountService;
    }

    public function register(Product $product): bool
    {
        if ($this->queueService->check($product) && $this->discountService->apply($product)) {
            return true;
        }

        return false;
    }
}
