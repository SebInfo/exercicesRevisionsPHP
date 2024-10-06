<?php
for ($i=1; $i<=5; $i++)
{
	$tab[] = rand(0,99);
}
var_dump($tab);
$max=-1;
$min=100;
for ($i=0; $i<=count($tab); $i++)
{
	if ($tab[$i] > $max)
	{
		$max = $tab[$i];
	}
	if ($tab[$i] < $min)
	{
		$min = $tab[$i];
	}
}
echo "<br/>Le min est :".$min."<br/>";
echo "Le max est :".$max;
