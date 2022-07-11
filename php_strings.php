<?php

// PHP String Functions

/*
strlen() - Return the Length of a String
The PHP strlen() function returns the length of a string.
*/

echo strlen("Hello world!"); // outputs 12

/*
str_word_count() - Count Words in a String
The PHP str_word_count() function counts the number of words in a string.
*/

echo str_word_count("Hello world!"); // outputs 2

/*
strrev() - Reverse a String
The PHP strrev() function reverses a string.
*/

echo strrev("Hello world!"); // outputs !dlrow olleH

/*
strpos() - Search For a Text Within a String
The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
*/

echo strpos("Hello world!", "world"); // outputs 6

/*
str_replace() - Replace Text Within a String
The PHP str_replace() function replaces some characters with some other characters in a string.
*/

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

?>