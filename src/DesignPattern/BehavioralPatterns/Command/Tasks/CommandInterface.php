<?php

namespace src\DesignPattern\BehavioralPatterns\Command\Tasks;

interface CommandInterface
{
    /**
     * @return void
     */
    public function execute(): void;
}
