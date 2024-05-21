<?php

namespace app\src\DesignPattern\Proxy\Downloader;

use app\src\DesignPattern\Proxy\Downloader\Downloader;

class CachedDownloader implements Downloader
{
    private Downloader $downloader;

    /**
     * @param Downloader $downloader
     */
    public function __construct(Downloader $downloader)
    {
        $this->downloader = $downloader;
    }


    /**
     * @param string $url
     * @return string
     */
    public function download(string $url): string
    {
        $fileName = basename($url);
        if (!file_exists(__DIR__.'/storage'.DIRECTORY_SEPARATOR.$fileName)) {
            $content = $this->downloader->download($url);
            file_put_contents(__DIR__.'/storage'.DIRECTORY_SEPARATOR.$fileName, $content);
        }
        return file_get_contents(__DIR__.'/storage'.DIRECTORY_SEPARATOR.$fileName);
    }
}
