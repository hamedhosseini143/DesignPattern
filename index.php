<?php

require 'vendor/autoload.php';

use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Client;
use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Order;


/** start factory method pattern  */

$order = new Order(100, true);
$paypal = new Client('paypal', $order);
$paypal->processPayment();
echo '<br>';
$creditCard = new Client('credit_card', $order);
$creditCard->processPayment();

/** end factory method pattern  */