<!DOCTYPE html>
<html>
<head>
<title>Result</title>
</head>
<body>
<?php 
echo "<center><h1>Simple calculator</h1></center>";

$op1=$_POST['op1'];
$op2=$_POST['op2'];
$operator=$_POST['operator'];

switch($operator)
{
case '+':
	$res=$op1+$op2;
	break;
case '-':
	$res=$op1-$op2;
	break;
case '*':
	$res=$op1*$op2;
	break;
casse '/':
	if($op2==0)
	{
	  echo "<center><h2>Division by zero error</h2></center>";
	  exit(0);
	}
else
	{
	$res=$op1/$op2;
	break;
	default:
	echo"enter the valid input";
	break;
	}
}

echo"<center><h2>Result :".$op1.$operator.$op2."=".$res."</h2></center>";
?>
</body></html>
