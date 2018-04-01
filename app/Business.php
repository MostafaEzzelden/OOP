<?php
namespace Acme;

use Acme\Users\Person;

class Business
{
    protected $staff;

    public function __construct($staff = null)
    {
        $this->staff = $staff ?: new Staff();
    }

    public function hire(Person $user)
    {
        $this->staff->add($user);
    }

    public function getUserMembers()
    {
        return $this->staff->members();
    }
}
