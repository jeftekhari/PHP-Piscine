#!/usr/bin/php
<?
	if (!$argv[1])
		exit;
	$exploded = explode(' ', $argv[1]);
	$filtered = array_filter($exploded);
	$spliced = array_splice($filtered, 0);
	$i = 0;
	while ($spliced[$i]) {
		echo "$spliced[$i]";
		if ($spliced[$i + 1])
			echo " ";
		$i++;
	}
	if ($argc > 1)
		echo "\n";
?>
