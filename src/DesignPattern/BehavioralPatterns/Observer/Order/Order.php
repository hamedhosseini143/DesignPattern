<?php

namespace src\DesignPattern\BehavioralPatterns\Observer\Order;

use SplObjectStorage;
use SplObserver;
use SplSubject;
use src\DesignPattern\BehavioralPatterns\Observer\Order\Observer\ProcessingObserver;

class Order implements SplSubject
{
    private const PENDING = 1;
    private const PROCESSING = 2;
    private const READY = 3;
    private const SENT = 4;
    private const DELIVERED = 5;
    private int $status;
    private int $price;

    private SplObjectStorage $observers;

    public function __construct(int $price)
    {
        $this->price = $price;
        $this->status = self::PENDING;
        $this->observers = new SplObjectStorage();
    }

    /**
     * @return void
     */
    public function process(): void
    {
        $this->status = self::PROCESSING;
        $this->registerProcessioningObserver();
    }

    public function registerProcessioningObserver(): void
    {
        $this->attach(new ProcessingObserver());
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function ready(): void
    {
        $this->status = self::READY;
        $this->clearProcessioningObserver();

    }

    private function clearProcessioningObserver(): void
    {
        foreach ($this->observers as $observer) {
            $this->detach($observer);
        }
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function changePrice(int $newPrice): void
    {
        $this->price = $newPrice;
        $this->notify();
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}