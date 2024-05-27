<?php

namespace src\DesignPattern\BehavioralPatterns\Command\FileManager;

class FileManager
{
    public function save(FileCommandInterface $fileCommand): void
    {
        echo "File saved\n";
    }

    public function remove(FileCommandInterface $fileCommand): void
    {
        echo "File removed\n";
    }

    public function download(FileCommandInterface $fileCommand): void
    {
        echo "File deleted\n";
    }


}