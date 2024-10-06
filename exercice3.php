<?php
for ($i=1; $i<=5; $i++)
{
	$tab[] = rand(0,99);
}
var_dump($tab);

function plusGrand (array $unTab)
{
	$tailleTab = count($unTab);
	if ($tailleTab==0) return false;
	$max=$unTab[0];
	for ($i=1; $i<$tailleTab; $i++)
	{
		if ($unTab[$i] > $max)
		{
			$max = $unTab[$i];
		}
	}
	return $max;
}

function plusPetit (array $unTab)
{
	$tailleTab = count($unTab);
	if ($tailleTab==0) return false;
	$min=$unTab[0];
	for ($i=1; $i<$tailleTab; $i++)
	{
		if ($unTab[$i] < $min)
		{
			$min = $unTab[$i];
		}
	}
	return $min;
}

echo "<br/>Le plus grand nombre est ".plusGrand($tab)."<br/>";
echo "Le plus petit nombre est ".plusPetit($tab)."<br/>";