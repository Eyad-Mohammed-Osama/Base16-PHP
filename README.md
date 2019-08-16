# Base16-PHP
Encoding And Decoding Text Using Only 16 Characters

# Installation
First make sure you have `composer` installed on your device.

From your terminal, navigate to your project folder and run this command:
`composer require syrian-lucianos/base16-php`

And that's all!

# Usage
The library supports two flavors of programming paradigms:
  - Procedural Programming
  - Object Oriented Programming
  
## Procedural Programming
Use the `base16_encode()` and `base16_decode()` functions to respectively encode and decode your text content.

For example:
```
$text = "Hello World!, This is a test.";
$encoded = base16_encode($text); 
echo $encoded . PHP_EOL;  // Output "48656c6c6f20576f726c64212c2054686973206973206120746573742e"
$decoded = base16_decode($encoded); 
echo $decoded . PHP_EOL;  // Output "Hello World!, This is a test."
```

## Object Oriented Programming
The object oriented version of the library provides `Base16` class alongside its static `Encode()` and `Decode()` methods to respectively encode and decode your text content as follows:
```
$text = "Hello World!, This is a test.";
$encoded = Base16::Encode($text); 
echo $encoded . PHP_EOL;  // Output "48656c6c6f20576f726c64212c2054686973206973206120746573742e"
$decoded = Base16::Decode($encoded); 
echo $decoded . PHP_EOL;  // Output "Hello World!, This is a test."
```