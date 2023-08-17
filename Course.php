<?php

class Course
{
    private SplStack $changes;
    private SplQueue $waitingList;
    private SplObjectStorage $registeredStudents;

    public function __construct(string $name)
    {
        $this->changes = new SplStack();
        $this->waitingList = new SplQueue();
        $this->registeredStudents = new SplObjectStorage();
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

    public function registerStudent(Student $student): void
    {
        $this->registeredStudents->attach($student);
    }

    public function getRegisteredStudents(): SplObjectStorage
    {
        return clone $this->registeredStudents;
    }
}