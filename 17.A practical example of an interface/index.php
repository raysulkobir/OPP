<?php

class Book
{
    public $title;
    public $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}

class Library implements IteratorAggregate
{
    private $books = [];

    public function addBook($title, $author)
    {
        $this->books[] = new Book($title, $author);
    }

    public function getIterator(): Traversable 
    {
        return new ArrayIterator($this->books);
    }
}

// Create a library and add some books
$library = new Library();
$library->addBook('The Catcher in the Rye', 'J.D. Salinger');
$library->addBook('To Kill a Mockingbird', 'Harper Lee');
$library->addBook('1984', 'George Orwell');

// Iterate through the library's books
foreach ($library as $book) {
    echo $book->title . ' by ' . $book->author . PHP_EOL;
}
