<?php
require("../src/Base16.php");

$text = "Hello World!, This is a test.";

// Procedural way
$encoded = base16_encode($text);
echo $encoded . PHP_EOL;
$decoded = base16_decode($encoded);
echo $decoded . PHP_EOL;

echo "-----------------------------------" . PHP_EOL;

// OOP way
$encoded = Base16::Encode($text);
echo $encoded . PHP_EOL;
$decoded = Base16::Decode($encoded);
echo $decoded . PHP_EOL;