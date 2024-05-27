<?php

require 'vendor/autoload.php';

use src\DesignPattern\BehavioralPatterns\TemplateMethod\Document\ClientDocument;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\FormBuilderClient;
use src\DesignPattern\CreationalPatterns\Builder\RequestBuilder\ApiService;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Client;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Order;


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
echo "<br>";
/** end builder pattern  */


/** start template method pattern  */
echo "/** start template method pattern  */";
echo "<br>";

$document = new ClientDocument('word');
try {
    $document->generateDocument();
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "<br>";
$document = new ClientDocument('pdf');

try {
    $document->generateDocument();
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "<br>";
echo "/** end template method pattern  */";

/** end template method pattern  */
/** start command pattern  */
echo "/** start command pattern  */";
echo "<br>";

$addTaskCommand = new \src\DesignPattern\BehavioralPatterns\Command\Tasks\ClientCommandPattern();
$addTaskCommand->add();
echo "<br>";
echo "/** end command pattern  */";
/** end command pattern  */


