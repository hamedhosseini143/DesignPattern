<?php

namespace app\src\DesignPattern\Observer\Product\Observers;

use SplSubject;

class ProductOfferProductPriceObserver implements \SplObserver
{

    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject): void
    {
        echo "Product Offer: Product price has been changed to \n";
    }
}
