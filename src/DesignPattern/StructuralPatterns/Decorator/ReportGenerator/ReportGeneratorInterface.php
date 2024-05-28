<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator;

interface ReportGeneratorInterface
{
    public function generate() : string;
}
