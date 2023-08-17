<?php

class Curso
{
    private SplStack $changes;
    private SplQueue $waitingList;

    public function __construct(string $name)
    {
        $this->changes = new SplStack();
        $this->waitingList = new SplQueue();
    }

    public function addChange(string $change): void
    {
        $this->changes->push($change);
    }

    public function getChanges(): SplDoublyLinkedList
    {
        return clone $this->changes;
    }

    public function addWaitingStudent(string $student): void
    {
        $this->waitingList->enqueue($student);
    }

    public function getWaitingList(): SplQueue
    {
        return $this->waitingList;
    }
}