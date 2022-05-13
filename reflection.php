<?php
require_once "./exception/ValidationException.php";
require_once "./data/LoginRequest.php";
require_once "./helper/ValidationUtil.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "mhd";
$loginRequest->password = "pauzi";

// ValidationUtil::validate($loginRequest);
ValidationUtil::validateReflection($loginRequest);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $username;
    public ?string $password;
}

$register = new RegisterUserRequest();

ValidationUtil::validateReflection($register);
