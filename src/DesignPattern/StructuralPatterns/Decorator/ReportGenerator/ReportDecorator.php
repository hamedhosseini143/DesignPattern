<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator;

abstract class ReportDecorator implements ReportGeneratorInterface
{
    protected ReportGeneratorInterface $reportGenerator ;


    public function __construct(ReportGeneratorInterface $reportGenerator)
    {
        $this->reportGenerator = $reportGenerator;
    }

    public function generate(): string
    {
        return $this->reportGenerator->generate();
    }
}
