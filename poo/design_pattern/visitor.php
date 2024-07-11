<?php 
/*
The Visitor pattern is a behavioral design pattern that allows you to add new operations to an existing object structure
without modifying those objects. It separates the algorithm from the objects on which it operates,
which allows new operations to be defined without changing the classes of the objects on which they operate.
*/
interface Visitor
{
    public function visitBook(Book $book): void;
    public function visitVideo(Video $video): void;
}

interface Element
{
    public function accept(Visitor $visitor): void;
}

class LoanDurationCalculator implements Visitor
{
    public function visitBook(Book $book): void
    {
        echo "Calcul'{$book->getTitle()}': 14 days\n";
    }

    public function visitVideo(Video $video): void
    {
        echo "Calcul'{$video->getTitle()}': 7 days\n";
    }
}

class Book implements Element
{
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitBook($this);
    }
}

class Video implements Element
{
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitVideo($this);
    }
}

$books = [
    new Book("Guerre et Paix"),
    new Book("Les Misérables")
];

$videos = [
    new Video("The Shawshank Redemption"),
    new Video("Inception")
];

$calculator = new LoanDurationCalculator();

foreach ($books as $book) {
    $book->accept($calculator);
}

foreach ($videos as $video) {
    $video->accept($calculator);
}