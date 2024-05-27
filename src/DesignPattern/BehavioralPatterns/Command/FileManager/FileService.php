<?php

namespace src\DesignPattern\BehavioralPatterns\Command\FileManager;

class FileService
{
    /**
     * @var FileCommandInterface
     */
    private FileCommandInterface $command;

    /**
     * @param FileCommandInterface $command
     */
    public function __construct(FileCommandInterface $command)
    {
        $this->command = $command;
    }

    /**
     * @return void
     */
    public function save(): void
    {
        $this->command->execute();
    }

    /**
     * @return void
     */
    public function download(): void
    {
        $this->command->execute();
    }

    /**
     * @return void
     */
    public function remove(): void
    {
        $this->command->execute();
    }
}