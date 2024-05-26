<?php

namespace src\DesignPattern\CreationalPatterns\Builder\Example\Book;

class BookBuilder
{
    private string $title;
    private string $author;
    private string $yearPublication;
    private  $book;

    public function __construct($book)
    {
        $this->book = $book;
    }

    public static function new($book) : BookBuilder
    {
        return new BookBuilder($book);
    }

    public function setTitle(string $title): BookBuilder
    {
        $this->book->setTitle($title);
        return $this;
    }

    public function setAuthor(string $author): BookBuilder
    {
        $this->book->setAuthor($author);
        return $this;
    }

    public function setYearPublication(string $yearPublication): BookBuilder
    {
        $this->book->setYearPublication($yearPublication);
        return $this;
    }

    public function build(): Book
    {
        return new Book($this->book->title, $this->book->author, $this->book->yearPublication);
    }
}
