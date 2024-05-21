<?php

namespace src\DesignPattern\State\CMS\PostStatus;

use src\DesignPattern\State\CMS\PostStatus;

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
