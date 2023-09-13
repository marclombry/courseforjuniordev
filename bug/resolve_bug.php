<?php
// Syntax Error
// Uncomment the next line to trigger a syntax error
// echo "Hello World";

// Parse Error
// Uncomment the next line to trigger a parse error
// if (condition {

// Fatal Error (undefined function)
// Uncomment the next line to trigger a fatal error
// undefinedFunction();

// Warning Error (undefined variable)
$undefinedVar = 42;

// Notice Error (undefined array key)
$array = [];
// Uncomment the next line to trigger a notice error
// echo $array["key"];

// Exception Handling
try {
    // Uncomment the next line to trigger an exception
    // throw new Exception("This is an exception.");
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

// Custom Error Handler
// Uncomment the next line to use a custom error handler
// set_error_handler("customErrorHandler");

// Custom Exception Handler
// Uncomment the next line to use a custom exception handler
// set_exception_handler("customExceptionHandler");

// Logic Error
$total = $price * $quantity; // Incorrect logic

// Custom Error Handler Function
function customErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo "Custom error handler: $errstr in $errfile on line $errline";
}

// Custom Exception Handler Function
function customExceptionHandler($exception)
{
    echo "Custom exception handler: " . $exception->getMessage();
}

// Uncomment the next line to trigger a custom error
// trigger_error("This is a custom error.", E_USER_ERROR);

