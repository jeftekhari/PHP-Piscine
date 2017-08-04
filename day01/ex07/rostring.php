#!/usr/bin/php
<?
if ($argc >= 2)
{
	if (!$argv[1])
		exit;
	$replaced = preg_replace('#\s+#', ' ', $argv[1]);
	$exploded = explode(' ', $replaced);
	$tmp = $exploded[0];
	unset($exploded[0]);
	array_push($exploded, $tmp);
	echo implode(' ', $exploded)."\n";
}
?>
