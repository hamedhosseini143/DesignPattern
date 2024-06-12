<?php

namespace src\DesignPattern\BehavioralPatterns\Observer\Product;

class ClientObserver
{
    public function updatePrice(): void
    {
        $product = new Product (1000);
        $product->attachPriceObserver();
        $product->changePrice(2000);

    }
}
