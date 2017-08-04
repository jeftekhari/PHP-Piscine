#!/usr/bin/php
<?

	if (!$argv[1])
		exit;
	$exploded = explode(' ', $argv[1]);
	$filtered = array_filter($exploded);
	$spliced = array_splice($filtered, 0);
	for ($i = 0; $spliced[$i]; $i++) {
		echo "$spliced[$i]";
		if ($spliced[$i + 1])
			echo " ";
	}
	if ($argc > 2)
		echo "\n";

?>
