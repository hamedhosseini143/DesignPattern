<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Document;

abstract class Document
{
    /**
     * @return void
     */
    public function generate(): void
    {
        $this->openDocument();
        $this->addDocument();
        $this->saveDocument();
        $this->closeDocument();
    }

    /**
     * @return void
     */
    abstract protected function openDocument(): void;

    /**
     * @return void
     */
    abstract protected function addDocument(): void;

    /**
     * @return void
     */
    abstract protected function saveDocument(): void;

    /**
     * @return void
     */
    abstract protected function closeDocument(): void;

}