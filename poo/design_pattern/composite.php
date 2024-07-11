<?php 
/**
 * The Composite pattern is a structural design pattern that allows individual objects and compositions of objects to be treated uniformly. 
 * It is particularly useful for representing tree hierarchies where composite objects may contain child objects and where these children may 
 * themselves be composites.
 */
interface FileSystemComponent
{
    public function getName(): string;
    public function getSize(): int;
}
class File implements FileSystemComponent
{
    private $name;
    private $size;

    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}

class Directory implements FileSystemComponent
{
    private $name;
    private $children = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function add(FileSystemComponent $component)
    {
        $this->children[] = $component;
    }

    public function getSize(): int
    {
        $totalSize = 0;
        foreach ($this->children as $child) {
            $totalSize += $child->getSize();
        }
        return $totalSize;
    }
}


$file1 = new File("file1.txt", 100);
$file2 = new File("file2.txt", 200);

$dir1 = new Directory("dir1");
$dir1->add($file1);
$dir1->add($file2);

$file3 = new File("file3.txt", 300);
$dir2 = new Directory("dir2");
$dir2->add($file3);
$dir2->add($dir1);


echo $file1->getName() . ": " . $file1->getSize() . " bytes\n"; // file1.txt: 100 bytes
echo $dir1->getName() . ": " . $dir1->getSize() . " bytes\n";  // dir1: 300 bytes
echo $dir2->getName() . ": " . $dir2->getSize() . " bytes\n";  // dir2: 600 bytes