<?php

namespace src\DesignPattern\CreationalPatterns\Singleton\Example;

class ClientSingleton
{
    /**
     * @return void
     */
    public static function run() : void
    {
        $singleton = Singleton::getInstance();
        $singleton->runTest();
    }
}