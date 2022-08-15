<?php

function printLeaders($array, $num)
{
	for ($i = 0; $i < $num; $i++)
	{
		for ($j = $i + 1; $j < $num; $j++)
		{
			if ($array[$i] <=$array[$j])
				break;
		}
		
		// the loop won't break
		if ($j == $num)
			echo($array[$i] . " ");
		}
}


$array = array(16, 17, 4, 3, 5, 2, 1, 2, 3, 4, 0);
$number = sizeof($array);
printLeaders($array, $number);
	

?>
