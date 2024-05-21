<?php

namespace src\DesignPattern\Creational\FactoryMethod\Example\LibraryBook;

class OtherBookFactory extends LibraryBookCreator
{

    /**
     * @param $title
     * @param $price
     * @param $category
     * @return mixed
     */
    protected function createBook($title, $price, $category)
    {
        return new OtherBook($title, $price, $category);
    }
}

