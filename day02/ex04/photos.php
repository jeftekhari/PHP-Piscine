#!/usr/bin/php
<?
if ($argc > 1)
{
	$url = $argv[1];
	##Gives us the full HTML##
	$html = file_get_contents($url);
	if (!empty($html))
	{
		##parses the full domain sans 'http[s]'## 
		preg_match('/http[s]?:\/\/(?P<domain>.*)/', $url, $tmp);
		$domain = $tmp['domain'];
		##parses the file path of the images##
		preg_match_all('/<img.*src=\"(?P<src>[^\"]*)/', $html, $tmp, PREG_SET_ORDER);
		##Checks each $tmp and makes sure there's not already a directory before creating one. The name of the directory is "./$domain" and the files inside are the basename(filename);##
		foreach ($tmp as $match)
		{
			if (!file_exists("./".$domain))
				mkdir("./".$domain, 0755, true);
			if (!file_exists("./".$domain.$match['src'])) 
			{
				if (!preg_match('/http[s]?:\/\/(?P<domain>.*)/', $match['src']))
					$src = $url.$match['src'];
				else
					$src = $match['src'];
				file_put_contents("./".$domain."/".basename($match['src']), file_get_contents($src));
			}
		}
	}
}
?>
