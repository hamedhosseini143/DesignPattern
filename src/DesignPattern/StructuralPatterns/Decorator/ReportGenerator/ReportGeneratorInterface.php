<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator;

interface ReportGeneratorInterface
{
    /**
     * @return string
     */
    public function generate() : string;
}
