<?php

/*
PHP Arithmetic Operators

The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

Operator	        Name	  Example	  Result
+	            Addition	  $x + $y	  Sum of $x and $y	
-	         Subtraction	  $x - $y	  Difference of $x and $y	
*	      Multiplication	  $x * $y	  Product of $x and $y	
/	            Division	  $x / $y	  Quotient of $x and $y	
%	             Modulus	  $x % $y	  Remainder of $x divided by $y	
**	    Exponentiation	  $x ** $y	Result of raising $x to the $y'th power
*/

$x = 6;
$y = 2;

echo "      Addition \$x + \$y = " . $x + $y . "\n";
echo "   Subtraction \$x - \$y = " . $x - $y . "\n";
echo "Multiplication \$x * \$y = " . $x * $y . "\n";
echo "      Division \$x / \$y = " . $x / $y . "\n";
echo "       Modulus \$x % \$y = " . $x % $y . "\n";
echo "Exponentiation \$x ** \$y = " . $x ** $y . "\n";

/*
PHP Assignment Operators
The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

Assignment	Same as...	Description
x = y	      x = y	      The left operand gets set to the value of the expression on the right	
x += y	    x = x + y	  Addition	
x -= y	    x = x - y	  Subtraction	
x *= y	    x = x * y	  Multiplication	
x /= y	    x = x / y	  Division	
x %= y	    x = x % y	  Modulus
*/

$x = 6;
$y = 2;
echo "      Addition \$x += \$y = \n";
$x += $y;
echo $x . "\n";

$x = 6;
$y = 2;
echo "   Subtraction \$x -= \$y = \n";
$x -= $y;
echo $x . "\n";

$x = 6;
$y = 2;
echo "Multiplication \$x *= \$y = \n";
$x *= $y;
echo $x . "\n";

$x = 6;
$y = 2;
echo "      Division \$x /= \$y = \n";
$x /= $y;
echo $x . "\n";

$x = 6;
$y = 2;
echo "       Modulus \$x %= \$y = \n";
$x %= $y;
echo $x . "\n";

/*
PHP Comparison Operators
The PHP comparison operators are used to compare two values (number or string):

Operator	Name	                    Example	    Result
==	      Equal	                    $x == $y	  Returns true if $x is equal to $y	
===	      Identical	                $x === $y	  Returns true if $x is equal to $y, and they are of the same type	
!=	      Not equal	                $x != $y	  Returns true if $x is not equal to $y	
<>	      Not equal	                $x <> $y	  Returns true if $x is not equal to $y	
!==	      Not identical	            $x !== $y	  Returns true if $x is not equal to $y, or they are not of the same type	
>	        Greater than	            $x > $y	    Returns true if $x is greater than $y	
<	        Less than	                $x < $y	    Returns true if $x is less than $y	
>=	      Greater than or equal to	$x >= $y	  Returns true if $x is greater than or equal to $y	
<=	      Less than or equal to	    $x <= $y	  Returns true if $x is less than or equal to $y	
<=>	      Spaceship	                $x <=> $y	  Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
*/

?>