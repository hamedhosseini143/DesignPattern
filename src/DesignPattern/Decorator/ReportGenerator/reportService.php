<?php

namespace src\DesignPattern\Decorator\ReportGenerator;

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
