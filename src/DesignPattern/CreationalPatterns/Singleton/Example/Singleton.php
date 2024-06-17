<?php

namespace src\DesignPattern\CreationalPatterns\Singleton\Example;

class Singleton
{
    private static ?Singleton $instance = null;

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

    public function test(): void
    {
        echo 'Singleton test method called';
    }
}