<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\LibraryBook;

class DigitalBook extends Book
{
    private $title;
    private $price;
    private $category;

    /**
     * @param $title
     * @param $price
     * @param $category
     */
    public function __construct($title, $price, $category)
    {
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getPrice() : string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
}
