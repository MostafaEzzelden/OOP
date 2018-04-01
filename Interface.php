<?php

interface Logger
{
    public function execute($message);
}


class LogToFile implements Logger
{
    public function execute($message)
    {
        return ("Log the Message to a File " . $message);
    }
}


class LogToDatabase implements Logger
{
    public function execute($message)
    {
        return ("Log the Message to a Database " . $message);
    }
}

class Controller
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show($message)
    {
        return $this->logger->execute($message);
    }
}


$toFile = new Controller(new LogToFile);
$toDatabase = new Controller(new LogToDatabase);

var_dump($toFile->show(' ( via file ) '));
var_dump($toDatabase->show('( via database ) '));


################################################################

interface Provider
{
    public function login($user);

    public function logout();
}


class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Auth implements Provider
{
    public function login($user)
    {
        return $user->getName();
    }

    public function logout()
    {
        //
    }
}

$auth = (new Auth)->login(new User('mostafaEzz'));

var_dump($auth);
