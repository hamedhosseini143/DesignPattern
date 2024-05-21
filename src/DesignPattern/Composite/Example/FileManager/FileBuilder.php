<?php

namespace src\DesignPattern\Composite\Example\FileManager;

class FileBuilder
{
    public function build()
    {
        $fileCollection = new FileCollection();
        $fileCollection->add(new FileItem('File 1'));
        $fileCollection->add(new FileItem('File 2'));
        $fileCollection->add(new FileItem('File 3'));

        return $fileCollection->render();
    }
}
