<?
function ft_split($p1)
{
	if (!$p1)
		exit;
	$explode = explode(' ', $p1);
	$filter = array_filter($explode);
	$splice = array_splice($filter, 0);
	sort($splice);
	return $splice;
}
?>
