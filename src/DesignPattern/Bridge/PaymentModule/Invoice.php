<?php

namespace src\DesignPattern\Bridge\PaymentModule;

class Invoice
{
    private $title;
    private $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
