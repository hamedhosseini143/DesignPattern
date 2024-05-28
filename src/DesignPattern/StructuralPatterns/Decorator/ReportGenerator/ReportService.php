<?php

namespace src\DesignPattern\StructuralPatterns\Decorator\ReportGenerator;

class ReportService implements ReportGeneratorInterface
{
    /**
     * @return string
     */
    public function generate(): string
    {
        return 'Report';
    }
}
