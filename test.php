<?php 

// PHP Script
for($i=1; $i<= 5 ; $i++)
{
	for($j=0; $j<= 5-$i; $j++)
	{
		echo " ";
	}

	echo str_repeat("* ",$i);
	echo "<br>";
}

?>