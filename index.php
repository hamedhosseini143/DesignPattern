<?php

require 'vendor/autoload.php';

use src\DesignPattern\BehavioralPatterns\Command\Tasks\ClientCommandPattern;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\Document\ClientDocument;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\FormBuilderClient;
use src\DesignPattern\CreationalPatterns\Builder\RequestBuilder\ApiService;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Client;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Order;
use src\DesignPattern\StructuralPatterns\Composite\MenuBuilder\MenuBuilderClient;

/**
 * @return void
 */
function demoFactoryMethodPattern(): void
{
    echo "<br>/** Factory Method Pattern */<br>";
    $order = new Order(100, true);
    (new Client('paypal', $order))->processPayment();
    echo '<br>';
    (new Client('credit_card', $order))->processPayment();
}

/**
 * @return void
 */
function demoAbstractFactoryPattern(): void
{
    echo "<br>/** Abstract Factory Pattern */<br>";
    $form = new FormBuilderClient();
    $form->buildBootstrapForm();
    echo '<br>';
    $form->buildTailwindForm();
}

/**
 * @return void
 */
function demoBuilderPattern(): void
{
    echo "<br>/** Builder Pattern */<br>";
    $request = new ApiService();
    $user = $request->fetchUser();
    echo "<pre>" . print_r($user, true) . "</pre>";
}

/**
 * @return void
 */
function demoTemplateMethodPattern(): void
{
    echo "<br>/** Template Method Pattern */<br>";
    try {
        (new ClientDocument('word'))->generateDocument();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    echo "<br>";
    try {
        (new ClientDocument('pdf'))->generateDocument();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

/**
 * @return void
 */
function demoCommandPattern(): void
{
    echo "<br>/** Command Pattern */<br>";
    $addTaskCommand = new ClientCommandPattern();
    $addTaskCommand->add();
}

function demoCompositePattern(): void
{
    echo "<br>/** start Composite Pattern */<br>";
    $menu = new MenuBuilderClient();
    echo $menu->buildMenu();
    echo "<br>/** end Composite Pattern */<br>";

}

echo "<br>Starting Design Patterns Demonstrations<br>";
demoFactoryMethodPattern();
demoAbstractFactoryPattern();
demoBuilderPattern();
demoTemplateMethodPattern();
demoCommandPattern();
demoCompositePattern();
echo "<br>End of Design Patterns Demonstrations<br>";
