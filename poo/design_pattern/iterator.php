<?php 

/**
 * The Iterator pattern is a behavioral design pattern that allows elements of a set (such as a collection of objects) 
 * to be accessed sequentially without exposing the internal structure of the set. 
 * This allows you to browse and access items in a collection without having to know how it is implemented.
 */
interface IteratorInterface
{
    public function hasNext(): bool;
    public function next();
    public function currentItem();
}

class BookIterator implements IteratorInterface
{
    private $books = [];
    private $position = 0;

    public function __construct(array $books)
    {
        $this->books = $books;
    }

    public function hasNext(): bool
    {
        return isset($this->books[$this->position]);
    }

    public function next()
    {
        $book = $this->books[$this->position];
        $this->position++;
        return $book;
    }

    public function currentItem()
    {
        return $this->books[$this->position];
    }
}

class BookCollection
{
    private $books = [];

    public function addBook(string $book)
    {
        $this->books[] = $book;
    }

    public function createIterator(): BookIterator
    {
        return new BookIterator($this->books);
    }
}

$bookCollection = new BookCollection();
$bookCollection->addBook("Design Patterns: Elements of Reusable Object-Oriented Software");
$bookCollection->addBook("Clean Code: A Handbook of Agile Software Craftsmanship");
$bookCollection->addBook("Refactoring: Improving the Design of Existing Code");

$iterator = $bookCollection->createIterator();

while ($iterator->hasNext()) {
    echo $iterator->next() . "\n";
}