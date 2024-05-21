<?php

namespace src\DesignPattern\Proxy\Downloader;

interface Downloader
{
    public function download(string $url): string;
}
