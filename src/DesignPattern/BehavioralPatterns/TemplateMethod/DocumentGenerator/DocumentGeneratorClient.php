<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

class DocumentGeneratorClient
{
    /**
     * @var UserData
     */
    private UserData $users;

    /**
     * @param UserData $users
     */
    public function __construct(UserData $users)
    {
        $this->users = $users;
    }

    /**
     * @return void
     */
    public function generateUserReportToCsv(): void
    {
        $userReportToCsv = new UserReportToCsv($this->users);
        $userReportToCsv->generate();
    }
}