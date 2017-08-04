#!/usr/bin/php
<?php
	$utmp = file_get_contents("/var/run/utmpx", 1);
	$result = [];
	print_r($utmp);
	while ($utmp != "")
	{
		date_default_timezone_set("America/Vancouver");
		$array = unpack("A256user/A4id/A32ttyname/ipid/itype/lloginsec/lloginus/A256host/A64pad", $utmp);
		if ($array['type'] == 7)
			$result[] = $array['user'] . " " . $array['ttyname'] . "    " . strftime("%b %e %R", $array['loginsec']) . PHP_EOL;
		$utmp = substr($utmp, 628);
	}
	sort ($result);
	$i = 0;
	foreach($result as $print)
		echo $print;
?>
