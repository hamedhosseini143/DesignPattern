<?php

namespace src\DesignPattern\StructuralPatterns\Proxy\Downloader;

interface Downloader
{
    public function download(string $url): string;
}
