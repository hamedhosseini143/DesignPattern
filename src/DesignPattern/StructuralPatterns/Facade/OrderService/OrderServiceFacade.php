<?php

namespace src\DesignPattern\StructuralPatterns\Facade\OrderService;


class OrderServiceFacade
{
    /**
     * @var QuantityService
     */
    private QuantityService $queueService;
    /**
     * @var DiscountService
     */
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

    /**
     * @param Basket $basket
     * @return string
     */
    public function register(Basket $basket): string
    {
        $totalPrice = 0;
        foreach ($basket->items() as $product) {
            $result = $this->queueService->check($product);
            if (!$result) {
                return 'Product is not available';
            }
            $totalPrice += $product->price();
        }
        $discount = $this->discountService->apply($basket->coupon(), $totalPrice);
        return 'Total price: ' . $discount;
    }
}
