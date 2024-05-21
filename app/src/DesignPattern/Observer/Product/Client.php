<?php

namespace app\src\DesignPattern\Observer\Product;

use app\src\DesignPattern\Observer\Product\Observers\ProductOfferProductPriceObserver;
use app\src\DesignPattern\Observer\Product\Product;

class Client
{
    public function updatePrice()
    {
        $product = new Product (1000);
        $product->attachPriceObserver();
        $product->changePrice(2000);
    }
}
