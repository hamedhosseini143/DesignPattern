<?php

namespace src\DesignPattern\StructuralPatterns \Decorator\ReportGenerator;

abstract class ReportDecorator implements ReportGenerator
{
    protected \src\DesignPattern\StructuralPatterns \Decorator\ReportGenerator\ReportGenerator $reportGenerator ;


    public function __construct(\src\DesignPattern\StructuralPatterns \Decorator\ReportGenerator\ReportGenerator $reportGenerator)
    {
        $this->reportGenerator = $reportGenerator;
    }

    public function generate(): string
    {
        return $this->reportGenerator->generate();
    }
}
