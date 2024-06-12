<?php

namespace src\DesignPattern\BehavioralPatterns\Observer\Order\Observer;

use SplSubject;

class ProcessingObserver implements \SplObserver
{
    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject): void
    {
            // TODO: Implement update() method.
    }
}