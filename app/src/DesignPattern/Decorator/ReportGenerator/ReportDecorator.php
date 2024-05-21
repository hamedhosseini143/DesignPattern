<?php

namespace app\src\DesignPattern\Decorator\ReportGenerator;

use app\src\DesignPattern\Decorator\ReportGenerator\ReportGenerator;

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
