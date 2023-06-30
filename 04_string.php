<?php

echo ("Hello World!");
echo "<br>";

echo strlen("Hello World!"); // outputs 12
echo "<br>";

echo str_word_count("Hello Myanmar Country!"); // word count outputs 3
echo "<br>";

echo strrev("Hello World!");
echo "<br>";

echo strpos("Hello World", "World"); // outputs 6
// NOTE: The first character position in a string is 0(not 1).
echo "<br>";

                // old str  new str         origin str
echo str_replace("World!", "Dolly Molly", "Hello World!");

?>