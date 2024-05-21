<?php

namespace src\DesignPattern\TemplateMethod\DocumentGenerator;

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
