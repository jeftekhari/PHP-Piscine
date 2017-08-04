<?

$action = $_GET['action'];
$name = $_GET['name'];
$value = $_GET['value'];

if ($action === "set" && $name && $value)
		setcookie($name, $value, time() + 500);
else if ($action === "get" && $_COOKIE[$name])
		echo $_COOKIE[$name] . "\n";
else if ($action === "del" && $name)
		setcookie($name);
?>
