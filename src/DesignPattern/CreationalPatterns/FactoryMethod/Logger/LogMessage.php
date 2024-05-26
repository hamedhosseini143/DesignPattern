<?php

namespace src\DesignPattern\CreationalPatterns\FactoryMethod\Logger;

class LogMessage
{
    private string $content;

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

}
