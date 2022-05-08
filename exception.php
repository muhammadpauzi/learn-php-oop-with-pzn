<?php
require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";
require_once "helper/validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "";
$loginRequest->password = "123";

try {
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
    // } catch (ValidationException $ex) {
    //     echo "VALIDATION ERROR : {$ex->getMessage()}" . PHP_EOL;
} catch (Exception | ValidationException $ex) {
    echo "ERROR : {$ex->getMessage()}" . PHP_EOL;

    var_dump($ex->getTrace());
    echo $ex->getTraceAsString();
} finally {
    echo "SELESAI" . PHP_EOL;
}
