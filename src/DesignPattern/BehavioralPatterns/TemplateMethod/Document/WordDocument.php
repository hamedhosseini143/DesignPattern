<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Document;

class WordDocument extends Document
{

    /**
     * @return void
     */
    protected function openDocument(): void
    {
        echo "Open Word document\n";
    }

    /**
     * @return void
     */
    protected function addDocument(): void
    {
        echo "Add content to Word document\n";
    }

    /**
     * @return void
     */
    protected function saveDocument(): void
    {
        echo "Save Word document\n";
    }

    /**
     * @return void
     */
    protected function closeDocument(): void
    {
        echo "Close Word document\n";
    }
}