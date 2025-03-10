<?php

namespace src\DesignPattern\StructuralPatterns \Composite\Example\FileManager;

interface FileComponent
{
    public function render(): string;

    public function add(FileComponent $fileComponent): void;
}
