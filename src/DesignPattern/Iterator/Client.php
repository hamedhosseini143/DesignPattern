<?php

namespace src\DesignPattern\Iterator;

class Client
{
    public function run(): void
    {
        $user1 = new User('John Doe1', '30');
        $user2 = new User('Jane Doe2', '25');
        $user3 = new User('Janet Doe3', '35');
        $user4 = new User('Janet Doe4', '35');

        $userList = new UserList();
        $userList->addUser($user1);
        $userList->addUser($user2);
        $userList->addUser($user3);
        $userList->addUser($user4);

        foreach ($userList as $user) {
            echo $user->getUserInfo() . PHP_EOL;
        }

        $userList->removeUser($user2);

        foreach ($userList as $user) {
            echo $user->getUserInfo() . PHP_EOL;
        }

        echo "Total Users: " . count($userList) . PHP_EOL;
    }
}

$test = new Client();
$test->run();
