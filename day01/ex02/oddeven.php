#!/usr/bin/php
<?
while (1)
{
	$file = fopen("php://stdin", "r");
	echo "Enter a number: ";
	$my_var = fgets($file);
	if (!$my_var)
	{
		echo "^D\n";
		exit;
	}
	$my_var = rtrim($my_var);
	if (is_numeric($my_var) == false)
	{
		echo "'$my_var' is not a number\n";
		continue ;
	}
	if ($my_var % 2 == 0)
		echo "The number $my_var is even\n";
	else
		echo "The number $my_var is odd\n";
}
?>
