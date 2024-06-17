<?php

namespace src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess;

class Product
{
    /**
     * @var int
     */
    private int $pid;
    /**
     * @var string
     */
    private string $productName;
    /**
     * @var int
     */
    private int $price;

    /**
     * @param int $pid
     * @param int $price
     * @param string $productName
     */
    public function __construct(int $pid, int $price, string $productName)
    {
        $this->pid = $pid;
        $this->price = $price;
        $this->productName = $productName;
    }

    /**
     * @return int
     */
    public function getPid(): int
    {
        return $this->pid;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

}
