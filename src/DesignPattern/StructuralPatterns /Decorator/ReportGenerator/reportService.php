<?php

namespace src\DesignPattern\StructuralPatterns \Decorator\ReportGenerator;

class reportService implements ReportGenerator
{

    /**
     * @return string
     */
    public function generate() : string
    {
        return 'Report generated';
    }
}
