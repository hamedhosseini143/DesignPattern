<?php

namespace src\DesignPattern\BehavioralPatterns\Observer\Order;

use SplObjectStorage;
use SplObserver;
use SplSubject;
use src\DesignPattern\BehavioralPatterns\Observer\Order\Observer\ProcessingObserver;

class Order implements SplSubject
{
    /**
     * @var int
     */
    private const PENDING = 1;
    /**
     * @var int
     */
    private const PROCESSING = 2;
    /**
     * @var int
     */
    private const READY = 3;
    /**
     * @var int
     */
    private const SENT = 4;
    /**
     * @var int
     */
    private const DELIVERED = 5;
    /**
     * @var int
     */
    private int $status;
    /**
     * @var int
     */
    private int $price;

    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $observers;

    /**
     * @param int $price
     */
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

    /**
     * @return void
     */
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

    /**
     * @return void
     */
    public function ready(): void
    {
        $this->status = self::READY;
        $this->clearProcessioningObserver();

    }

    /**
     * @return void
     */
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

    /**
     * @param int $newPrice
     * @return void
     */
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