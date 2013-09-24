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
	<h3 class="header">Login</h3>
	<form role="form" action="php/login.php" method="post">
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
