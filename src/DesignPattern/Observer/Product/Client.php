<?php

namespace src\DesignPattern\Observer\Product;

class Client
{
    public function updatePrice()
    {
        $product = new Product (1000);
        $product->attachPriceObserver();
        $product->changePrice(2000);
    }
}
