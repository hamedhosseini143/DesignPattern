<?php

namespace src\DesignPattern\Composite\Example\FileManager;

interface FileComponent
{
    public function render(): string;

    public function add(FileComponent $fileComponent): void;
}
