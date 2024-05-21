<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\Order;

class OrderProcessorFacory
{
    static public function process($type): DownloadOrder|PhisicalOrder
    {
        return match ($type) {
            'download' => new DownloadOrder(),
            'physical' => new PhisicalOrder(),
            default => throw new \Exception('Invalid type'),
        };
    }
}
