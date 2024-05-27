<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

class UserReportToCsv extends UserReport
{
    /**
     * @return void
     */
    protected function export() : void
    {
        echo "Exporting to CSV\n";
    }
}
