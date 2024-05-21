<?php

namespace app\src\DesignPattern\TemplateMethod\DocumentGenerator;

use app\src\DesignPattern\TemplateMethod\DocumentGenerator\UserReport;

class UserReportToWord extends UserReport
{

    /**
     * @return mixed
     */
    protected function export()
    {
       // Export to Word
    }
}
