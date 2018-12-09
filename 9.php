<?php
$states="Mississippi Alabama Texas Massachusets Kanas";
$statesArray=[];
$state1=explode(' ',$states);
foreach($state1 as $state)
{
	if(preg_match('/xas$/',$state))
		$statesArray[0]=($state);
}
foreach($state1 as $state)
{
	if(preg_match('/^k.*s$/i',$state))
		$statesArray[1]=($state);
	}
foreach($state1 as $state)
{
	if(preg_match('/m.*s$/i',$state))
		$statesArray[2]=($state);
	}
foreach($state1 as $state)
{
	if(preg_match('/a$/',$state))
		$statesArray[3]=($state);
	}
		
foreach($statesArray as $element=> $value)
print($value." is the element ".$element."<br/>");



?>
