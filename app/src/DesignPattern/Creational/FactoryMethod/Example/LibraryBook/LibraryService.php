<?php

namespace app\src\DesignPattern\Creational\FactoryMethod\Example\LibraryBook;

class LibraryService
{
    static function createBook($title, $price, $category, $type): Book
    {
        switch ($type) {
            case 'digital':
                return new DigitalBook($title, $price, $category);
            case 'normal':
                return new NormalBook($title, $price, $category);
            case 'other':
                return new OtherBook($title, $price, $category);
        }
    }
}
