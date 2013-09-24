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
<?php
// define variables and set to empty values
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
	// Create connection
	$con=mysqli_connect("localhost","root","password","synoptics");

	// Check connection
	if (mysqli_connect_errno($con))
  	{
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="col-lg-4 col-lg-offset-4">
	<h3 class="header">Login</h3>
	<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="form-group">
			<label for="email">Email address</label>
  	  <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
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
