<?php
for ($i=1; $i<=5; $i++)
{
	$tab[] = rand(0,99);
}
function doublon($array)
{
	if(count(array_unique($array)) != count($array)) 
	{
		return True;
	}	
	else 
	{
       return False;
	}
}

var_dump($tab);
if (doublon($tab))
{
    echo "Il y a des doublons";
}
else
{
    echo "Pas de doublon";
}

