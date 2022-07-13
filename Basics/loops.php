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

?>