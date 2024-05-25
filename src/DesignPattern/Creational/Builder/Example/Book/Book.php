<?php

namespace src\DesignPattern\Creational\Builder\Example\Book;

class Book
{
    private string $title;
    private string $author;
    private string $yearPublication;

    /**
     * @param string $title
     * @param string $author
     * @param string $yearPublication
     */
    public function __construct(string $title, string $author, string $yearPublication)
    {
        $this->title = $title;
        $this->author = $author;
        $this->yearPublication = $yearPublication;
    }

    public function setTitle(string $title): string
    {
        $this->title = $title;
    }

    public function setAuthor(string $author): string
    {
        $this->author = $author;
    }

    public function setYearPublication(string $yearPublication): string
    {
        $this->yearPublication = $yearPublication;
    }
}
