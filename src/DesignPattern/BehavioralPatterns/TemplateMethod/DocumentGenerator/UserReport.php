<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

use Illuminate\Database\Eloquent\Collection;

abstract class UserReport
{
    private Collection $users;
    protected Collection $dataToExport;

    /**
     * @param Collection $users
     */
    public function __construct(Collection $users)
    {
        $this->users = $users;
    }


    public function generate(): void
    {
        $this->dataToExport = $this->prepare();
    }
    private function prepare(): Collection
    {
       return $this->users->filter(function ($user) {
            return $user->is_active;
        });
    }
    abstract protected function export();
}
