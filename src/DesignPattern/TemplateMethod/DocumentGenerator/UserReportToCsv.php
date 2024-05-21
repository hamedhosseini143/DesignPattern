<?php

namespace src\DesignPattern\TemplateMethod\DocumentGenerator;

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
