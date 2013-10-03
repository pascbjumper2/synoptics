<?php
function undefVal($var)
{
  if(isset($var)) {
  	return $var;
  } else {
  	return null;
  }
}

session_start();
// store session data
$_SESSION['user_id']= undefVal($_SESSION['user_id']) ? undefVal($_SESSION['user_id']) : null;
if(!$_SESSION['user_id']) {
	header("Location: login.php");
	die();
}
?>
<!DOCTYPE>
<html>
<head>
	<link href="./bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<style>
		.header {
			text-align:center;
			font-weight:bold;
		}
	</style>
</head>
<body>

<div class="col-lg-4 col-lg-offset-4">
	<h3 class="header">SYNOPTICS IS HERE BIOTCH</h3>
	<a href="logout.php">Log out<a>
</div>

</body>
</html>
