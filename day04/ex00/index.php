<?PHP

session_start();

$login = $_GET['login'];
$passwd = $_GET['passwd'];

if ($_GET['submit'] === "OK")
{
	$_SESSION['login'] = $login;
	$_SESSION['passwd'] = $passwd;
}
?>
<html>
	<body>
		<form method="GET">
		Username: <input type="text" name="login" value="<?PHP echo $_SESSION['login']; ?>"/>
		<br />
		Password: <input type="password" name="passwd" value="<?PHP echo $_SESSION['passwd'];?>"/>
		<br />
		<input type="submit" name="submit" value="OK"/>
	</body>
</html>
