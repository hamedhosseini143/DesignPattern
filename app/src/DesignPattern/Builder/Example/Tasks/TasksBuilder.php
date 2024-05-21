<?php

namespace app\src\DesignPattern\Builder\Example\Tasks;

use app\src\DesignPattern\Builder\Example\Tasks\Tasks;

class TasksBuilder
{
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    private string $description;
    /**
     * @var string
     */
    private string $dueDate;
    /**
     * @var string
     */
    private string $dedline;

    private $tasks;

    public function __construct($tasks)
    {
        $this->tasks = $tasks;
    }

    public static function new($tasks): TasksBuilder
    {
        return new TasksBuilder($tasks);
    }

    public function setTitle(string $title): TasksBuilder
    {
        $this->title = $title;
        return $this;
    }

    public function setDescription(string $description): TasksBuilder
    {
        $this->description = $description;
        return $this;
    }

    public function setDueDate(string $dueDate): TasksBuilder
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    public function setDedline(string $dedline): TasksBuilder
    {
        $this->dedline = $dedline;
        return $this;
    }

    public function build(): Tasks
    {
        return new Tasks($this->title, $this->description, $this->dueDate, $this->dedline);
    }
}
