<?php

namespace src\DesignPattern\TemplateMethod\DocumentGenerator;

class UserReportToPdf extends UserReport
{

    /**
     * @return mixed
     */
    protected function export()
    {
        // Export to PDF
        $this->dataToExport;

    }
}
