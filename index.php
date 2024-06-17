<?php

require 'vendor/autoload.php';

use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\AccessVerifier;
use src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\User;
use src\DesignPattern\BehavioralPatterns\Command\Tasks\ClientCommandPattern;
use src\DesignPattern\BehavioralPatterns\Observer\Product\ClientObserver;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator\DocumentGeneratorClient;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator\UserData;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator\UserReportToCsv;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\Salary\OnSiteSalary;
use src\DesignPattern\BehavioralPatterns\TemplateMethod\Salary\SalaryTemplateMethodSalary;
use src\DesignPattern\CreationalPatterns\AbstractFactory\FormBuilder\FormBuilderClient;
use src\DesignPattern\CreationalPatterns\Builder\RequestBuilder\ApiService;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Client;
use src\DesignPattern\CreationalPatterns\FactoryMethod\PaymentMethod\Order;
use src\DesignPattern\CreationalPatterns\Singleton\Example\ClientSingleton;
use src\DesignPattern\StructuralPatterns\Composite\MenuBuilder\MenuBuilderClient;
use src\DesignPattern\StructuralPatterns\Decorator\InvoicePrice\ClientDecoratorOverprice;
use src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator\ReportDecoratorClient;
use src\DesignPattern\StructuralPatterns\Decorator\UserPresenter\UserDecoratorClient;
use src\DesignPattern\StructuralPatterns\Facade\OrderService\Basket;
use src\DesignPattern\StructuralPatterns\Facade\OrderService\DiscountService;
use src\DesignPattern\StructuralPatterns\Facade\OrderService\OrderServiceFacade;
use src\DesignPattern\StructuralPatterns\Facade\OrderService\Product;
use src\DesignPattern\StructuralPatterns\Facade\OrderService\QuantityService;
use src\DesignPattern\StructuralPatterns\Flyweight\DiscountGenerator\DiscountFactory;

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

function demoTemplateMethod() : void
{
    echo "<br>/** start Template Method Pattern */<br>";
    $DocumentGenerator = new DocumentGeneratorClient(new UserReportToCsv(new UserData()));
    echo $DocumentGenerator->generateDocument();
    echo "<br>/** start Template Method Pattern salary example */<br>";
    $OnSiteSalary = new SalaryTemplateMethodSalary(new OnSiteSalary());
    echo 'salary is: ' . $OnSiteSalary->calculateSalary();
    echo "<br>/** end Template Method Pattern salary example */<br>";
    echo "<br>/** end Template Method Pattern */<br>";
}

function demoDecoratorPattern() : void
{
    echo "<br>/** start Decorator Pattern */<br>";
    $invoice = new ClientDecoratorOverprice();
    echo 'Total Price: ' . $invoice->calculatePrice() ;
    echo "<br>";
    $report = new ReportDecoratorClient();
    echo $report->report();
    echo "<br>";
    $useName = new UserDecoratorClient();
    echo $useName->client();
    echo "<br>/** end Decorator Pattern */<br>";
}

function demoFacadePattern(): void
{
    echo "<br>/** start Facade Pattern */<br>";

    $quantityService = new QuantityService();
    $discountService = new DiscountService();
    $orderServiceFacade = new OrderServiceFacade($quantityService, $discountService);

    $basket = new Basket();
    $basket->add(new Product(100, 'product1'));
    $basket->add(new Product(200, 'product2'));

    $order = $orderServiceFacade->register($basket);
    echo $order;

    echo "<br>/** end Facade Pattern */<br>";
}

function demoObserverPattern(): void
{
    echo "<br>/** start Observer Pattern */<br>";
    $client = new ClientObserver();
    $client->updatePrice();
    echo "<br>/** end Observer Pattern */<br>";
}

function demoFlyweightPattern(): void
{
    echo "<br>/** start Flyweight Pattern */<br>";

    $discountFactory = new DiscountFactory();
    $client = new \src\DesignPattern\StructuralPatterns\Flyweight\DiscountGenerator\Client($discountFactory);
    $client->generateDiscounts();

    echo "<br>/** end Flyweight Pattern */<br>";
}

function demoSingletonPattern(): void
{
    echo "<br>/** start Singleton Pattern */<br>";
    $client = new ClientSingleton();
    $client->run();
    echo "<br>/** end Singleton Pattern */<br>";
}

function demoChainOfResponsibilityPattern(): void
{
    echo "<br>/** start Chain Of Responsibility Pattern */<br>";
    $user1 = new User(1, 'user1', true);
    $user2 = new User(2, 'user2', false);
    $product = new \src\DesignPattern\BehavioralPatterns\ChainOfResponsibility\ProductAccess\Product(1, 100, 'product1');
    $accessVerifier = new AccessVerifier();
    $accessVerifier->verify($user1, $product);
    echo "<br>";
    $accessVerifier->verify($user2, $product);
    echo "<br>/** end Chain Of Responsibility Pattern */<br>";
}

echo "<br>Starting Design Patterns Demonstrations<br>";
demoFactoryMethodPattern();
demoAbstractFactoryPattern();
demoBuilderPattern();
demoCommandPattern();
demoCompositePattern();
demoDecoratorPattern();
demoTemplateMethod();
demoFacadePattern();
demoObserverPattern();
demoFlyweightPattern();
demoSingletonPattern();
demoChainOfResponsibilityPattern();
echo "<br>End of Design Patterns Demonstrations<br>";
