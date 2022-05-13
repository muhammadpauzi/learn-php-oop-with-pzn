<?php
class ValidationUtil
{
    static function validate(LoginRequest $loginRequest)
    {
        if (!isset($loginRequest->username)) {
            throw new ValidationException("username is not set");
        } else if (!isset($loginRequest->password)) {
            throw new ValidationException("password is not set");
        } else if (is_null($loginRequest->username)) {
            throw new ValidationException("username is null");
        } else if (is_null($loginRequest->password)) {
            throw new ValidationException("password is null");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}
