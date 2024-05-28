<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator;

abstract class ReportDecorator implements ReportGeneratorInterface
{
    /**
     * @var ReportGeneratorInterface
     */
    protected ReportGeneratorInterface $reportGenerator ;


    /**
     * @param ReportGeneratorInterface $reportGenerator
     */
    public function __construct(ReportGeneratorInterface $reportGenerator)
    {
        $this->reportGenerator = $reportGenerator;
    }

}
