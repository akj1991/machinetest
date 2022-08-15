<?php

function findSame( $a1, $a2, $a3, $num1, $num2, $num3)
{
	
	
	$i = 0; $j = 0; $k = 0;

	
	while ($i < $num1 && $j < $num2 && $k < $num3)
	{
		
		
		if ($a1[$i] == $a2[$j] &&
					$a2[$j] == $a3[$k])
		{
			echo $a1[$i] , " ";
			$i++;
			$j++;
			$k++;
		}

		
		else if ($a1[$i] < $a2[$j])
			$i++;

		
		else if ($a2[$j] < $a3[$k])
			$j++;

		
		else
			$k++;
	}
}


	$a1 = array(10, 11, 12, 13, 14, 15);
	$a2 = array(12, 13, 14, 15, 16);
	$a3 = array(14, 15, 16, 17, 18);
	$num1 = count($a1);
	$num2 = count($a2);
	$num3 = count($a3);

	echo "Similar Numbers are ";
	
	findSame($a1, $a2, $a3, $num1, $num2, $num3);
	

?>