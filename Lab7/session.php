<?php
session_start();
if (isset($_SESSION['views']))
	$_SESSION['views']=$_SESSION['views']+1;
else
	$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
$cookieName="text";
$cookieValue="Hello there!!";
setcookie($cookieName, $cookieValue, time() + (86400*30), "/");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session and cookies</title>
</head>
<body>

<?php
if(!isset($_COOKIE[$cookieName])) {
  echo "Cookie named '" . $cookieName . "' is not set!";
} else {
  echo "Cookie '" . $cookieName . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookieName];
}
?>

</body>
</html>