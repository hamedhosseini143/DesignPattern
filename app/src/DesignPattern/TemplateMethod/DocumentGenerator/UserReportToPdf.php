<?php

namespace app\src\DesignPattern\TemplateMethod\DocumentGenerator;

use app\src\DesignPattern\TemplateMethod\DocumentGenerator\UserReport;

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
