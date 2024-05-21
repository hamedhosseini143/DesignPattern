<?php

namespace src\DesignPattern\Composite\Example\FileManager;

class FileCollection implements FileComponent
{
    private $files = [];

    public function add(FileComponent $file): void
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
