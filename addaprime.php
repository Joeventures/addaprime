<?php

function secret($number) {
	return $number;
}

function all_primes() {
	global $argv;
	$input = intval($argv[1]);
	if( $input < 3 ) die("Please input an integer larger than 2.");
	$primes = array();
	for( $i = 2; $i <= $input; $i = gmp_nextprime($i)) {
		array_push($primes, gmp_strval($i));
	}
	return $primes;
}

function secret_together($x, $y) {
	return secret($x + $y);
}

function secret_apart($x, $y) {
	return secret($x) + secret($y);
}

