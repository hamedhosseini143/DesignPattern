<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\LibraryBook;

class NormalBookFactory extends LibraryBookCreator
{

    /**
     * @param $title
     * @param $price
     * @param $category
     * @return mixed
     */
    protected function createBook($title, $price, $category)
    {
        return new NormalBook($title, $price, $category);
    }
}

