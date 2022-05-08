<?php

function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username is null");
    }
    if (!isset($request->password)) {
        throw new ValidationException("Password is null");
    }
    if (trim($request->username) === "") {
        throw new Exception("Username is empty");
    }
    if (trim($request->password) === "") {
        throw new Exception("Password is empty");
    }
}
