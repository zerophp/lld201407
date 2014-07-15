<?php


function fibonacci ($max)
{
	$fibo = array();
	$fibo[0]=0;
	$fibo[1]=1;

	$f0 = 0;
	$f1 = 1;
	$f2=$f0+$f1;
	
	while ($f2<=$max)
	{
		$fibo[]=$f2;
		$f0=$f1;
		$f1=$f2;
		$f2=$f0+$f1;
	}
	
	return $fibo;
}
