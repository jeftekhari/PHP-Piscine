#!/usr/bin/php
<?
if ($argc >= 2)
{
	$i = 1;
	$new = explode(' ', $argv[$i]);
	$i++;
	while ($argv[$i])
	{
		$j = 0;
		$exploded = explode(' ', $argv[$i]);
		while ($exploded[$j])
		{
			array_push($new, $exploded[$j]);
			$j++;
		}
		unset($exploded);
		$i++;
	}
	$filtered = array_filter($new);
	$spliced = array_splice($filtered, 0);
	sort($spliced);
	for ($k = 0; $spliced[$k]; $k++)
		echo "$spliced[$k]\n";
}
?>
