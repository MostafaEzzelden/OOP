<?php

use Acme\Users\Person;
use Acme\Business;

$business = new Business();

$business->hire(new Person('Ali'));
$business->hire(new Person('Acme'));
$business->hire(new Person('Mostafa'));

var_dump(
    $business->getUserMembers()
);
