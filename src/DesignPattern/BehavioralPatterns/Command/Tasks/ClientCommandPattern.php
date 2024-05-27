<?php

namespace src\DesignPattern\BehavioralPatterns\Command\Tasks;

class ClientCommandPattern
{
    /**
     * @return void
     */
    public function add(): void
    {
        $addTaskHandler = new AddTaskHandler();
        $addTaskCommand = new AddTaskCommand('Task 1', 'Task 1 content', $addTaskHandler);
        $addTaskCommand->execute();
    }
}
