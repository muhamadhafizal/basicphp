<?php

function add($x, $y) {
	$total = $x + $y;
	echo $total;
	//return $total;
}

function totaladd() {
	$x = 10;
	$y = 20;
	$result = $this->add($x, $y);
	//echo $result;
}

totaladd();

?>