<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Example\FileManager;

class FileCollection implements FileComponent
{
    private $files = [];

    public function add(\src\DesignPattern\StructuralPatterns \Composite\Example\FileManager\FileComponent $file): void
    {
        $this->files[] = $file;
    }

    public function render(): string
    {
        $output = '';

        foreach ($this->files as $file) {
            $output .= $file->render();
        }

        return $output;
    }
}
