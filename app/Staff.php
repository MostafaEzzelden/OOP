<?php

namespace Acme;

use Acme\Users\Person;

class Staff
{
    private $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $user)
    {
        $this->members[] = $user;
    }

    public function members()
    {
        return $this->members;
    }
}
