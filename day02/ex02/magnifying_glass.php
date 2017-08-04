#!/usr/bin/php
<?

if($argc == 0)
    exit;
$string = file_get_contents($argv[1]);
$result = preg_replace_callback(
    '/<[Aa] [Hh][Rr][Ee][Ff]=[^> ]*(.*?)<\/[aA]>/s' ,
    function($matches){
        $matches[0] = preg_replace_callback(
        '/([Tt][iI][Tt][Ll][Ee]=")(.*?)(">)/s' , function($matches) {
        return $matches[1] . strtoupper($matches[2]) . $matches[3];
		}, $matches[0]);

        $matches[0] = preg_replace_callback(
        '/(>)(.*?)(<|$)/s' , function($matches) {
        return $matches[1] . strtoupper($matches[2]) . $matches[3];
        }, $matches[0]);
        return $matches[0];
    },
    $string);
echo $result;
?>
