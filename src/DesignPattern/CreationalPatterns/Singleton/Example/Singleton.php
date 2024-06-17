<?php

namespace src\DesignPattern\CreationalPatterns\Singleton\Example;

class Singleton
{
    /**
     * @var Singleton|null
     */
    private static ?Singleton $instance = null;

    /**
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    /**
     * @return void
     */
    public function runTest(): void
    {
        echo 'Singleton test method called <br>';
    }
}