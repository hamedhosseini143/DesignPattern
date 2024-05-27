<?php

namespace src\DesignPattern\BehavioralPatterns\Command\FileManager\Commands;

use src\DesignPattern\BehavioralPatterns\Command\FileManager\FileCommandInterface;
use src\DesignPattern\BehavioralPatterns\Command\FileManager\FileManager;

class RemoveFileCommand implements FileCommandInterface
{
    private FileManager $fileManager;

    private $file;

    /**
     * @param FileManager $fileManager
     * @param $file
     */
    public function __construct(FileManager $fileManager, $file)
    {
        $this->fileManager = $fileManager;
        $this->file = $file;
    }


    /**
     * @return vioid
     */
    public function execute()
    {
        $this->fileManager->remove($this);
    }
}