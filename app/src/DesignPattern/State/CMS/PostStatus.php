<?php

namespace app\src\DesignPattern\State\CMS;

use app\src\DesignPattern\State\CMS\Post;

abstract class PostStatus
{
    protected $post;

    public function setPost(Post $post): void
    {
        $this->post = $post;
    }

    abstract public function draft(): void;
    abstract public function modration(): void;
    abstract public function published(): void;

}
