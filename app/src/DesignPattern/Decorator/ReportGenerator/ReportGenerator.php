<?php

namespace app\src\DesignPattern\Decorator\ReportGenerator;

interface ReportGenerator
{
    public function generate() : string;
}
