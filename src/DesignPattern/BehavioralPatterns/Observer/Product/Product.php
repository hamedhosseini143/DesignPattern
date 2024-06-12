<?php

namespace src\DesignPattern\BehavioralPatterns\Observer\Product;

use SplObjectStorage;
use SplObserver;
use SplSubject;
use src\DesignPattern\BehavioralPatterns\Observer\Product\Observers\ProductOffer;
use src\DesignPattern\BehavioralPatterns\Observer\Product\Observers\ProductOfferProductPriceObserver;


class Product implements SplSubject
{
    /**
     * @var int
     */
    protected int $price;

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $observer;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
        $this->observer = new SplObjectStorage();

    }

    /**
     * @param int $newPrice
     * @return int
     */
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
        $this->observer->detach($observer);
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->observer as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return void
     */
    public function attachPriceObserver(): void
    {
        $this->attach(new ProductOfferProductPriceObserver());
        $this->attach(new ProductOffer());
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->observer->attach($observer);
    }

}
