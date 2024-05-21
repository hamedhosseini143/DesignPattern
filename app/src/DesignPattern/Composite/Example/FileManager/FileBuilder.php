<?php

namespace app\src\DesignPattern\Composite\Example\FileManager;

use app\src\DesignPattern\Composite\Example\FileManager\FileCollection;
use app\src\DesignPattern\Composite\Example\FileManager\FileItem;

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
