<?php
$string = "12345";
if (preg_match('/\d{0,5}/', $string)) {
	echo "Digit 0-9";
} else {
	echo "Error";
}
echo PHP_EOL;
var_dump (preg_match("/\d{0,5}/", $string));