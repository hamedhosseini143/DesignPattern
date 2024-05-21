<?php

namespace app\src\DesignPattern\TemplateMethod\DocumentGenerator;

use app\src\DesignPattern\TemplateMethod\DocumentGenerator\UserReport;

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
