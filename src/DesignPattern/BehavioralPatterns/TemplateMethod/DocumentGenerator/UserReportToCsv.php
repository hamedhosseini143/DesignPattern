<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

/**
 *
 */
class UserReportToCsv extends UserReporter
{
    /**
     * @param UserData $users
     */
    public function __construct(UserData $users)
    {
        parent::__construct($users);
    }

    /**
     * @return void
     */
    protected function export() : void
    {
        echo "Exporting to CSV\n";
    }
}
