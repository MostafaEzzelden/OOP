<?php
namespace Acme;

abstract class Provider
{
    abstract protected function authorize($user);
}

class Login extends Provider
{
    protected function authorize($user)
    {
        return $user->login->withFb();
    }
}

class Guest extends Provider
{
    protected function authorize($user)
    {
        return $user->login->withTwitter();
    }
}
