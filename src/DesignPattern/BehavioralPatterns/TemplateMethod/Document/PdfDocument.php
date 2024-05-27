<?php

namespace src\DesignPattern\BehavioralPatterns\TemplateMethod\Document;

class PdfDocument extends Document
{

    /**
     * @return void
     */
    protected function openDocument(): void
    {
        echo "Open PDF document\n";
    }

    /**
     * @return void
     */
    protected function addDocument(): void
    {
        echo "Add content to PDF document\n";
    }

    /**
     * @return void
     */
    protected function saveDocument(): void
    {
        echo "Save PDF document\n";
    }

    /**
     * @return void
     */
    protected function closeDocument(): void
    {
        echo "Close PDF document\n";
    }
}