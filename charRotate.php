<?php
/**
 * charRotate.php
 * Rotate the characters in a string by a given input and have the overflow
 * appear at the beginning of the string.
 * @var		string	$string	The original string
 * @var		integer	$input	The number of characters by which to rotate the string
 * @return	none			Outputs directly to stdout
 */
$string	= 'MyString';
$input	= 2;
$result	= substr($string,$input * -1) . substr($string,0,strlen($string) - $input);
print $result;
?>
