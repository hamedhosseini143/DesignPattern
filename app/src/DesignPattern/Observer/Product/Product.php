<?php

namespace app\src\DesignPattern\Observer\Product;

use app\src\DesignPattern\Observer\Product\Observers\ProductOfferProductPriceObserver;
use SplObjectStorage;
use SplObserver;
use SplSubject;

class Product implements SplSubject
{
    private int $price;

    private $abserver;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
        $this->abserver = new SplObjectStorage();

    }
    public function changePrice(int $newPrice): int
    {
        $this->price = $newPrice;
        $this->notify();
        return $this->price;
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $this->abserver->detach($observer);
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->abserver as $observer) {
            $observer->update($this);
        }
    }

    public function attachPriceObserver(): void
    {
        $this->attach(new ProductOfferProductPriceObserver());
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->abserver->attach($observer);
    }
}
