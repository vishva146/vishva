<?php
	$a=50;
	$b=2;
	$a=$a++ - ++$b;
	$b=++$a + $b++;
	echo"value of a is:".$a;
	echo"<br>value of b is:".$b;
?>