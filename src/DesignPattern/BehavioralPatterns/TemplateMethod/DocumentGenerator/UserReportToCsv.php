<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

class UserReportToCsv extends UserReport
{

    /**
     * @return mixed
     */
    protected function export()
    {
        // Export to CSV
        $this->dataToExport;

    }
}
