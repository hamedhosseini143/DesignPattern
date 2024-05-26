<?php

namespace src\DesignPattern\CreationalPatterns\Builder\Example\Tasks;

/**
 *
 */
class Tasks
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

    /**
     * @param string $title
     * @param string $description
     * @param string $dueDate
     * @param string $dedline
     */
    public function __construct(string $title, string $description, string $dueDate, string $dedline)
    {
        $this->title = $title;
        $this->description = $description;
        $this->dueDate = $dueDate;
        $this->dedline = $dedline;
    }

    /**
     * @param string $title
     * @return string
     */
    public function setTitle(string $title): string
    {
        $this->title = $title;
    }

    /**
     * @param string $description
     * @return string
     */
    public function setDescription(string $description): string
    {
        $this->description = $description;
    }

    /**
     * @param string $dueDate
     * @return string
     */
    public function setDueDate(string $dueDate): string
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @param string $dedline
     * @return string
     */
    public function setDedline(string $dedline): string
    {
        $this->dedline = $dedline;
    }
}
