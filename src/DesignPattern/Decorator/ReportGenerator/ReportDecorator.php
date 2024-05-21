<?php

namespace src\DesignPattern\Decorator\ReportGenerator;

abstract class ReportDecorator implements ReportGenerator
{
    protected ReportGenerator $reportGenerator ;


    public function __construct(ReportGenerator $reportGenerator)
    {
        $this->reportGenerator = $reportGenerator;
    }

    public function generate(): string
    {
        return $this->reportGenerator->generate();
    }
}
