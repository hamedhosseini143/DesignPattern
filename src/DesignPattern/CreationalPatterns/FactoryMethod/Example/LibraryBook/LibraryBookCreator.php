<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Example\LibraryBook;

abstract class LibraryBookCreator
{
public function create($title, $price, $category)
    {
        return $this->createBook($title, $price, $category);
    }

    abstract protected function createBook($title, $price, $category);
}
