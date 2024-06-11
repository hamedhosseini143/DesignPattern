<?php

require 'vendor/autoload.php';

use src\DesignPattern\BehavioralPatterns\Command\Tasks\ClientCommandPattern;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\Document\ClientDocument;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator\DocumentGeneratorClient;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator\UserData;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator\UserReportToCsv;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\FormBuilderClient;
use src\DesignPattern\CreationalPatterns\Builder\RequestBuilder\ApiService;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Client;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Order;
use src\DesignPattern\StructuralPatterns\Composite\MenuBuilder\MenuBuilderClient;
use src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice\InvoiceSrvice;
use src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator\ReportDecoratorClient;
use src\DesignPattern\StructuralPatterns\Decorator\UserPresenter\UserDecoratorClient;

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
    print_r($user);
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

function demoDecoratorPattern(): void
{
    echo "<br>/** start Decorator Pattern */<br>";
    $invoice = new InvoiceSrvice();
    echo 'Total Price: ' . $invoice->calculatePrice() ;
    echo "<br>";
    $report = new ReportDecoratorClient();
    echo $report->report();
    echo "<br>";
    $useName = new UserDecoratorClient();
    echo $useName->client();
    echo "<br>/** end Decorator Pattern */<br>";
}

function demoTemplateMethod() : void
{
    echo "<br>/** start Template Method Pattern */<br>";
    $DocumentGenerator = new DocumentGeneratorClient(new UserReportToCsv(new UserData()));
    echo $DocumentGenerator->generateDocument();
    echo "<br>/** end Template Method Pattern */<br>";
}

echo "<br>Starting Design Patterns Demonstrations<br>";
demoFactoryMethodPattern();
demoAbstractFactoryPattern();
demoBuilderPattern();
demoTemplateMethodPattern();
demoCommandPattern();
demoCompositePattern();
demoDecoratorPattern();
demoTemplateMethod();
echo "<br>End of Design Patterns Demonstrations<br>";
