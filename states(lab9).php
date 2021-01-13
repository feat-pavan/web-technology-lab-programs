<?php

$states = "Mississippi Alabama Texas Massachusetts Kansas";
$statesList = [];

$states1 = explode(' ',$states);
foreach($states1 as $state)
{
if(preg_match('/xas$/',($state)))
$statesList[0]=($state);
}

foreach ($states1 as $state)
{
if(preg_match('/^k.*s$/i', ($state)))
$statesList[1] = ($state);
}

foreach($states1 as $state)
{
if(preg_match('/^M.*s$/', ($state)))
$statesList[2] = ($state);
}

foreach($states1 as $state)
{
if(preg_match('/a$/',($state)))
$statesList[3] = ($state);
}
foreach ( $statesList as $element => $value )
{
print($value."is the element ". $element."<br/>");
}
?>