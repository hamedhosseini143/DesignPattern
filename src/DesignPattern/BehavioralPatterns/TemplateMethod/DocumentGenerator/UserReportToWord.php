<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

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
