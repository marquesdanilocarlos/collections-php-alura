<?php

use Ds\Hashable;

class Student implements Hashable
{
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function equals($obj): bool
    {
        if (!$obj instanceof Student) {
            return false;
        }

        return $obj->name === $this->name;
    }

    public function hash()
    {
        return $this->name;
    }


}