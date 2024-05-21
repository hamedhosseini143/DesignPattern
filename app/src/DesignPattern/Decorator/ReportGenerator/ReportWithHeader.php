<?php

namespace app\src\DesignPattern\Decorator\ReportGenerator;

use app\src\DesignPattern\Decorator\ReportGenerator\ReportDecorator;

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
