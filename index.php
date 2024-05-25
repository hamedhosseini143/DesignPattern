<?php

require 'vendor/autoload.php';

use src\DesignPattern\Creational\AbstractFactory\FormBuilder\FormBuilderClient;
use src\DesignPattern\Creational\Builder\RequestBuilder\ApiService;
use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Client;
use src\DesignPattern\Creational\FactoryMethod\PaymentMethod\Order;


/** start factory method pattern  */
echo "/** start factory method pattern  */";
echo "<br>";
$order = new Order(100, true);
$paypal = new Client('paypal', $order);
$paypal->processPayment();
echo '<br>';
$creditCard = new Client('credit_card', $order);
$creditCard->processPayment();
echo "<br>";
echo "/** end factory method pattern  */";
echo "<br>";


/** end factory method pattern  */

/** start abstract factory pattern  */
echo "/** start abstract factory pattern  */";
echo "<br>";
$form = new FormBuilderClient();
$form->buildBootstrapForm();
echo '<br>';
$form->buildTailwindForm();
echo "<br>";
echo "/** end abstract factory pattern  */";

/** end abstract factory pattern  */

/** start builder pattern  */
echo "<br>";
echo "/** start builder pattern  */";
echo "<br>";
$request = new ApiService();
$user = $request->fetchUser();
echo "<pre>";
print_r($user);
echo "</pre>";
echo "<br>";
echo "/** end builder pattern  */";

/** end builder pattern  */


