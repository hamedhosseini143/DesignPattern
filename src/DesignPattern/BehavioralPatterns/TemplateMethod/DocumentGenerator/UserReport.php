<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

abstract class UserReport
{
    /**
     * @var UserData
     */
    private UserData $users;
    /**
     * @var array
     */
    protected array $dataToExport;

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
    public function generate(): void
    {
        $this->dataToExport = $this->prepare();
        $this->export();
    }

    /**
     * @return array
     */
    private function prepare(): array
    {
       return $this->users->filter(function ($user) {
           return $user['active'] == 1;
        });
    }

    /**
     * @return void
     */
    abstract protected function export(): void;
}
