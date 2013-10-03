<?php
session_start();
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
	require_once "bootstrap.php";

	$user = $entityManager->getRepository('User')
		->findOneBy(array('email' => $email, 'password' => $password));
  
  if($user) {
  	$_SESSION['user_id'] = $user->getId();
  	header("Location: index.html.php");
		die();
  } else {
  	$error = "Email/password combination is invalid.";
  }

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
<?php if($error) echo "<div class=\"alert alert-danger\">".$error."</div>";?>
<div class="col-lg-4 col-lg-offset-4">
	<h3 class="header">Login</h3>
	<form role="form" action="login.php" method="post">
		<div class="form-group">
			<label for="email">Email address</label>
  	  <input name="email" type="text" class="form-control" id="email" placeholder="Enter email">
  	</div>
  	<div class="form-group">
  	  <label for="password">Password</label>
  	  <input name="password" type="password" class="form-control" id="password" placeholder="Password">
  	</div>
		<input class="btn btn-default pull-right" type="submit" value="Login">
	</form>
</div>

</body>
</html>
