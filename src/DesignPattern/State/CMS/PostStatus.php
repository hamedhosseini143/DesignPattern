<?php

namespace src\DesignPattern\State\CMS;

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
