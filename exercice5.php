<?php
for ($i=1; $i<=5; $i++)
{
	$tab[] = rand(0,99);
}

var_dump($tab);

if (croissant($tab))
{
    echo "Le tableau est croissant";
}
else
{
    echo "Le tableau n'est pas croissant";
}
function croissant($array)
{
    $croissant = True;
    $nbrElement = count($array);
	for($i = 1; $i <= $nbrElement-1; $i++)
    {
        if ($array[$i-1]>$array[$i])
        {
            $croissant = False;
        }
    }
    return $croissant;
}
