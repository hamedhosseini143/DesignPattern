<?php

namespace src\DesignPattern\BehavioralPatterns\Command\Tasks;

class Task
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
     * @param string $title
     * @param string $content
     */
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
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
