<?php

namespace app\src\DesignPattern\Composite\Example\FileManager;

class FileItem implements FileComponent
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function render(): string
    {
        return "<li>{$this->name}</li>";
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function add(FileComponent $fileComponent): void
    {
        throw new \Exception('FileItem cannot add a file');
    }
}
