<?php

namespace app\src\DesignPattern\Decorator\ReportGenerator;

use app\src\DesignPattern\Decorator\ReportGenerator\ReportGenerator;

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
