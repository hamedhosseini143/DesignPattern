<?php

namespace src\DesignPattern\BehavioralPatterns\Command\Tasks;

class AddTaskHandler
{
    /**
     * @param AddTaskCommand $add_task_command
     * @return void
     */
    public function execute(AddTaskCommand $add_task_command): void
    {
        echo "Add task with title: {$add_task_command->getTitle()} and content: {$add_task_command->getContent()}";
    }
}
