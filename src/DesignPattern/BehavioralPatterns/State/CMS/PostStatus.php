<?php

namespace src\DesignPattern\BehavioralPatterns\State\CMS;

abstract class PostStatus
{
    /**
     * @var Post
     */
    protected Post $post;

    /**
     * @param Post $post
     * @return void
     */
    public function setPost(Post $post): void
    {
        $this->post = $post;
    }

    /**
     * @return void
     */
    abstract public function draft(): void;

    /**
     * @return void
     */
    abstract public function moderation(): void;

    /**
     * @return void
     */
    abstract public function published(): void;

}
