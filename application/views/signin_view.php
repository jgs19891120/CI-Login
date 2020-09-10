<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	#container {
		margin-top: 10px;
		margin-left:35%;
		width: 30%;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	#form_panel {
		padding-top: 10px;
		padding-left: 20%
	}
	
	input {
		width: 50%;
	}

	button {
		background-color: #008CBA;
		border-radius: 4px;
		margin-bottom: 20px;
	}
	
</style>

</head>
<body>
	<div id="container">
		<form action="<?php echo site_url('Sign_in/auth'); ?>" method="POST" id="form_panel">
			<h2>Please sign in</h2>
				<div>
				<label for="exampleInputUsername">Username</label>
				<input type="username"  id="name_input" name="username" aria-describedby="emailHelp" placeholder="Username">
				</div>
				<br>
				<div>
				<label for="exampleInputPassword1">Password</label>&nbsp;
				<input type="password" id="password_input" name="password" placeholder="Password">
				</div>
				<br>
				<button type="submit">Sign In</button>
		</form>
	</div>
		
</body>
</html>