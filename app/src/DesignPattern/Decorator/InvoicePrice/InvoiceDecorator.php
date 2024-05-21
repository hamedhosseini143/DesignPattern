<?php

namespace app\src\DesignPattern\Decorator\InvoicePrice;

use app\src\DesignPattern\Decorator\InvoicePrice\InvoicePrice;

class InvoiceDecorator implements InvoicePrice
{
    private InvoicePrice $invoicePrice;

    public function __construct(InvoicePrice $invoicePrice)
    {
        $this->invoicePrice = $invoicePrice;
    }

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->invoicePrice->price();
    }
}
