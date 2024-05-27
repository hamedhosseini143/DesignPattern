<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

class UserReportToWord extends UserReport
{

    /**
     * @return void
     */
    protected function export(): void
    {
        echo "Exporting to Word\n";
    }
}
