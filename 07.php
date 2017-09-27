<?php
	for($i = 1; $i <= 100; $i++)
	{
		$k = 0;
		for($j = $i; $j > 0; $j--)
		{
			if($i % $j == 0)
				$k++;
		}
		if($k <= 2)
			echo $i, '<br />';
	}
?>