<?php

/* 
While loop

Syntax
while (condition is true) {
  code to be executed;
}
*/

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

/*
The PHP do...while Loop

Syntax
do {
  code to be executed;
} while (condition is true);
*/

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

// do..while loop will always run the code once

$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

/*
The PHP for Loop

Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
*/

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

/*
The PHP foreach Loop

Syntax
foreach ($array as $value) {
  code to be executed;
}
*/

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

// Output key and value 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

/*
PHP Break

The break statement can also be used to jump out of a loop.
This example jumps out of the loop when x is equal to 4:
*/

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

/*
PHP Continue

The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
*/

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

// Break and continue in a while loop

$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}

$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}

?>