<?php

	$Fizz = 'Fizz';
	$Buzz = 'Buzz';

	for ($i = 0; $i < 100; $i++) {
		switch ($i) {
			case ($i % 3 == 0 && $i % 5 == 0):
				echo $i . ' ' . $Fizz.$Buzz . "\n";
				break;
			case ($i % 3 == 0):
				echo $i . ' ' . $Fizz . "\n";
				break;
			case ($i % 5 == 0):
				echo $i . ' ' . $Buzz . "\n";
				break;
		}
	}

?>