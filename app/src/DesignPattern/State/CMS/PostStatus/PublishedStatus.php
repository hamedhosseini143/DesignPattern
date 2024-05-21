<?php

namespace app\src\DesignPattern\State\CMS\PostStatus;

use app\src\DesignPattern\State\CMS\PostStatus;
use app\src\DesignPattern\State\CMS\PostStatus\DraftStatus;
use app\src\DesignPattern\State\CMS\PostStatus\ModrationStatus;

class PublishedStatus extends PostStatus
{
    /**
     * @return void
     */
    public function draft(): void
    {
        $this->post->transitioanTo(new DraftStatus());
    }

    /**
     * @return void
     */
    public function modration(): void
    {
        $this->post->transitioanTo(new ModrationStatus());
    }

    /**
     * @return void
     */
    public function published(): void
    {
        $this->post->transitioanTo(new PublishedStatus());
    }

}
