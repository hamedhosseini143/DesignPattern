<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\LibraryBook;

class DigitalBookFactory extends LibraryBookCreator
{

    /**
     * @param $title
     * @param $price
     * @param $category
     * @return mixed
     */
    protected function createBook($title, $price, $category)
    {
        return new DigitalBook($title, $price, $category);
    }
}
