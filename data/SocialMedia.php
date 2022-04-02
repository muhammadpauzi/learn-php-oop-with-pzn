<?php
class SocialMedia
{
    public string $name;
}

// cannot being parent of child classes anymore
// final class Facebook extends SocialMedia
// {
// }

class Facebook extends SocialMedia
{
    // cannot override by child classes
    final public function login(string $username, $password): bool
    {
        return true;
    }
}

// should be error (final class)
// class FakeFacebook extends Facebook
// {
// }

class FakeFacebook extends Facebook
{
    // should be error (final method)
    // public function login(string $username, $password): bool
    // {
    //     return true;
    // }
}
