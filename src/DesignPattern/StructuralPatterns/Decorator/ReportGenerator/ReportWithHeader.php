<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator;

class ReportWithHeader extends ReportDecorator
{

    /**
     * @return string
     */
    public function generate(): string
    {
        return "'Header' . $this->reportGenerator->generate()";
    }
}