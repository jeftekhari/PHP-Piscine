#!/usr/bin/php
<?
function ft_is_sort($array)
{
	if (!$array)
		exit;
	$new = $array;
	sort($new);
	if ($new === $array)
		return true;
	else
		return false;
}
?>
