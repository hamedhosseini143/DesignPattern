<?php

namespace app\src\DesignPattern\State\CMS;

use app\src\DesignPattern\State\CMS\PostStatus;

class Post
{
    private string $title;
    private string $content;
    /** @var PostStatus $post */
    private $status;

    /**
     * @param string $title
     * @param string $content
     * @param string $status
     */
    public function __construct(string $title, string $content, string $status)
    {
        $this->title = $title;
        $this->content = $content;
        $this->transitioanTo($status);
    }

    public function transitioanTo(PostStatus $status)
    {
        $this->status = $status;
        $this->status->setPost($this);
    }

    public function modration(): void
    {
        $this->status->modration();
    }

    public function draft(): void
    {
        $this->status->draft();
    }

    public function published(): void
    {
        $this->status->published();
    }


}
