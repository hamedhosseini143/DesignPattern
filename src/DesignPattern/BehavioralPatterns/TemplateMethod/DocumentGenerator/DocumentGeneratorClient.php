<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;


class DocumentGeneratorClient
{
    /**
     * @var UserReporter
     */
    private UserReporter $userReporter;

    /**
     * @param UserReporter $userReporter
     */
    public function __construct(UserReporter $userReporter)
    {
        $this->userReporter = $userReporter;
    }

    /**
     * @return void
     */
    public function generateDocument():void
    {
        $this->userReporter->generate();
    }
}