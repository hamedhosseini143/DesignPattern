<?php

namespace src\DesignPattern\BehavioralPatterns\Command\Tasks;

class AddTaskCommand implements CommandInterface
{
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    private string $content;
    /**
     * @var AddTaskHandler
     */
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
     * @return void
     */
    public function execute(): void
    {
        $this->AddTaskHandler->execute($this);
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

}
