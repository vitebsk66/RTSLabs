<?php
/**
 * aboveBelow.php
 * Given an array of integers and a single integer as input, print the
 * number of integers in the array above and below the specified integer.
 * @var		array	$array	The array of integers
 * @var		integer	$input	The specified integer
 * @return	none			Outputs directly to stdout
 * @todo	Add support for cases where $input matches a given array element
 */
$array = [1,5,2,1,10];
$input = 6;
$above = 0;
$below = 0;
foreach ($array as $a) {
	if ($a > $input) {
		$above++;
	} elseif ($a < $input) {
		$below++;
	}
}
print "above: $above, below: $below";
?>
