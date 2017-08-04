#!/usr/bin/php
<?
if ($argc >= 2)
{
	$i = 1;
	while ($argv[$i])
	{
		echo "$argv[$i]\n";
		$i++;
	}
}
?>
