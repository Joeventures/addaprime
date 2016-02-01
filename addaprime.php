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

function all_combinations() {
	$combinations = array();
	foreach (all_primes() as $x) {
		foreach (all_primes() as $y) {
			$combinations[] = array( $x, $y );
		}
	}
	return $combinations;
}

function is_additive() {
	foreach( all_combinations() as $combination ) {
		$x = $combination[0];
		$y = $combination[1];
		if( secret_together($x, $y) <> secret_apart($x, $y)) return false;
	}
	return true;
}

if( is_additive() ) {
	echo "Congratulations. The secret() function is indeed additive.";
} else {
	echo "Sorry. The secret() function is not additive.";
}