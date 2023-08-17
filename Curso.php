<?php

class Curso
{
    private SplStack $changes;

    public function __construct(string $name)
    {
        $this->changes = new SplStack();
    }

    public function addChange(string $change): void
    {
        $this->changes->push($change);
    }

    public function getChanges(): SplDoublyLinkedList
    {
        return clone $this->changes;
    }
}