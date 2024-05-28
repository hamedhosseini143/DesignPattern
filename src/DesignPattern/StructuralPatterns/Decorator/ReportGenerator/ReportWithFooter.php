<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator;

class ReportWithFooter extends ReportDecorator
{

    /**
     * @return string
     */
    public function generate(): string
    {
        return 'Footer' . $this->reportGenerator->generate();
    }
}