<?php

use Ds\Queue;
use Ds\Set;
use Ds\Stack;

class Course
{
    private Stack $changes;
    private Queue $waitingList;
    private Set $registeredStudents;

    public function __construct(string $name)
    {
        $this->changes = new Stack();
        $this->waitingList = new Queue();
        $this->registeredStudents = new Set();
    }

    public function addChange(string $change): void
    {
        $this->changes->push($change);
    }

    public function undoChange(): void
    {
        $this->changes->pop();
    }

    public function getChanges(): Stack
    {
        return clone $this->changes->copy();
    }

    public function addWaitingStudent(string $student): void
    {
        $this->waitingList->push($student);
    }

    public function getWaitingList(): Queue
    {
        return $this->waitingList;
    }

    public function registerStudent(Student $student): void
    {
        $this->registeredStudents->add($student);
    }

    public function getRegisteredStudents(): Set
    {
        return clone $this->registeredStudents;
    }
}