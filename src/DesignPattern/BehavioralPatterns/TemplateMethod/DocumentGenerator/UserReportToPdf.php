<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

class UserReportToPdf extends UserReport
{

    /**
     * @return void
     */
    protected function export(): void
    {
        echo "Exporting to PDF\n";

    }
}
