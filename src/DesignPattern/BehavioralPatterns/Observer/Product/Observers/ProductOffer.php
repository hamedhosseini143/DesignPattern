<?php

namespace src\DesignPattern\BehavioralPatterns\Observer\Product\Observers;

use SplObserver;
use SplSubject;

class ProductOffer implements SplObserver
{
    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject): void
    {
        $newPrice = $subject->getPrice();
        echo "Product Offer: Product price has been changed to $newPrice";
    }
}
