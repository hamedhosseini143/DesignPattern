<?php

namespace src\DesignPattern\Creational\FactoryMethod\Example\Shoping;

class ShippingFactory
{
    static public function createProduct($type, $weight, $destination): Product
    {
        $shipping = null;
        switch ($type) {
            case 'Elctronic':
                $shipping = new ElctronicProduct($weight, $destination);
                break;
            case 'Clothing':
                $shipping = new ClothingProducts($weight, $destination);
                break;
            case 'other':
                $shipping = new OtherProducts($weight, $destination);
                break;
        }
        return $shipping;
    }
}
