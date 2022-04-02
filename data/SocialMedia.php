<?php
class SocialMedia
{
    public string $name;
}

// cannot being parent of child classes anymore
final class Facebook extends SocialMedia
{
}

// should be error
class FakeFacebook extends Facebook
{
}
