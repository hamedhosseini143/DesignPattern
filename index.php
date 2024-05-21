<?php

require 'vendor/autoload.php';

use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Client;
use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Order;

$order = new Order(100, true);
$client = new Client('paypal', $order);

$client->processPayment();