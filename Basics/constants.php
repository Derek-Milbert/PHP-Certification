<?php

/*
PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
To create a constant, use the define() function.

Syntax
define(name, value, case-insensitive)
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
*/

// Case sensitive

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// Case insensitive

define("GREETING_TWO", "Welcome to W3Schools.com!", true);
echo greeting_two;

/*
PHP Constant Arrays
*/

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

/*
Constants are Global
Constants are automatically global and can be used across the entire script.
*/

define("GREETING_THREE", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING_THREE;
}

myTest();

?>