<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\DocumentGenerator;

class UserData
{
    /**
     * @var array|array[]
     */
    private array $users = [["name" => "user 1", "id" => 1, "active" => 1], ["name" => "user 2", "id" => 2, "active" => 0], ["name" => "user 3", "id" => 3, "active" => 1], ["name" => "user 4", "id" => 4, "active" => 0], ["name" => "user 5", "id" => 5, "active" => 1], ["name" => "user 6", "id" => 6, "active" => 0], ["name" => "user 7", "id" => 7, "active" => 1], ["name" => "user 8", "id" => 8, "active" => 0], ["name" => "user 9", "id" => 9, "active" => 1], ["name" => "user 10", "id" => 10, "active" => 0],

    ];

    /**
     * @return array|array[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getUserById(int $id): array
    {
        return $this->users[$id - 1];
    }

    /**
     * @param $callback
     * @return array
     */
    public function filter($callback): array
    {
        return array_filter($this->users, $callback);
    }

}