<?php
// Create simple string
$name = 'Sohan';
$string = "Hello, I am $name"; // double quotes works like template literals in js
// result: Hello, I am Sohan
$string2 = 'Hello, I am $name'; // single quotes works like normal strings in js
// result: Hello, I am $name
echo $string . '<br>';
echo $string2 . '<br>';

// String concatenation
echo "Hello " . " World"; // Multiple concatenation . " and PHP";

// String functions
$string = "    Hello World      ";

// PHP_EOL is a constant that represents the end of a line
// thats mean any line break will happen in the browser
echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
// result: 00000100
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
// result: 00123456
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;
// result: HelloHello


// Multiline text and line breaks

$longText = "
  Hello, my name is sohan
  I am 27,
  I love my mom
";
echo $longText . '<br>' . PHP_EOL;
// result: Hello, my name is sohan I am 27, I love my mom

// nl2br() function will convert all the line breaks into <br> tag
// new line to break

echo nl2br($longText) . '<br>' . PHP_EOL;
// result: Hello, my name is sohan
// I am 27,
// I love my mom


// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>sohan</b>
  I am <b>27</b>,
  I love my mom
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
// result: Hello, my name is <b>sohan</b> I am <b>27</b>, I love my mom
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
// result: Hello, my name is &lt;b&gt;sohan&lt;/b&gt;<br />
//I am &lt;b&gt;27&lt;/b&gt;,<br />
//I love my mom
echo "5 - " . html_entity_decode(htmlentities('&lt;b&gt;sohan&lt;/b&gt')) . '<br>' . PHP_EOL;
// result: sohan --> it will be bold
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;
// result: Hello, my name is <b>sohan</b> I am <b>27</b>, I love my mom


// https://www.php.net/manual/en/ref.strings.php
