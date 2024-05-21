<?php

namespace app\src\DesignPattern\Command\Tasks;

class AddTaskCommand implements Command
{
    private string $title;
    private string $content;
    private AddTaskHandler $AddTaskHandler;

    /**
     * @param string $title
     * @param string $content
     * @param AddTaskHandler $AddTaskHandler
     */
    public function __construct(string $title, string $content, AddTaskHandler $AddTaskHandler)
    {
        $this->title = $title;
        $this->content = $content;
        $this->AddTaskHandler = $AddTaskHandler;
    }


    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->AddTaskHandler->execute($this);
    }
}
