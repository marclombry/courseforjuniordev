<?php

/**
 * The Memento pattern is a behavioral design pattern that allows you to capture and restore the internal
 *  state of an object without violating encapsulation. This allows you to return to a previous state of the object without the client having
 *  requested this operation having to know the details of the implementation of this object.
 */

class Editor
{
    private $content = "";

    public function type(string $words)
    {
        $this->content .= $words;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function save(): EditorMemento
    {
        return new EditorMemento($this->content);
    }

    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}
class EditorMemento
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
class History
{
    private $mementos = [];

    public function addMemento(EditorMemento $memento)
    {
        $this->mementos[] = $memento;
    }

    public function getLastMemento(): EditorMemento
    {
        return end($this->mementos);
    }
}
$editor = new Editor();
$history = new History();

$editor->type("Première phrase. ");
$history->addMemento($editor->save());

$editor->type("Deuxième phrase. ");
$editor->type("Troisième phrase. ");
$history->addMemento($editor->save());

echo "Contenu actuel : " . $editor->getContent() . "\n";

$editor->restore($history->getLastMemento());

echo "Contenu après restauration : " . $editor->getContent() . "\n";
