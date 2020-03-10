<?php

//1
$global = 5;
$global1 = 7;
$global2 = 10;
//2
mytest($global, $global1, $global2);

//3
function mytest($b, $a, $c) {
	$nilaitambahinner = 6;
	echo "<p> Variable nilaitambah INSIDE function is: $nilaitambahinner </p>";

	echo "<p> Variable nilaitambah 7 mytest function is: $a </p>";

	echo "<p> Variable nilaitambah 5 mytest function is: $b </p>";

	echo "<p> Variable nilaitambah 10 mytest function is: $c </p>";

}

//outside
/*echo "<p> Variable nilaitambah outside function is: $nilaitambah </p>";*/

/* function inside(){

$innervariable = 10;
echo "<p> Variable NilaiTambah inside function is : $innervariable </p>";

}

 */

?>