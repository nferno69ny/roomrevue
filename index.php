<?php
	list ($path) = explode('?',$_SERVER['REQUEST_URI']);
	$a = $path;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style>
		#login-modal { width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.5);} 
		#login-container { margin: 200px auto; width: 600px; border: 1px solid #fff; text-align: center; border-radius: 5px; }
		.login-field { width: 550px; padding: 3px; font-size: 30px; border: 0px; border-radius: 5px; box-shadow: 0px 0px 0px #fff;  font-family: Tahoma;}
		.login-field.button { background-color: #0f0;}
		</style>
	</head>
	<body>
		<a href="#" id="login">login</a>
		<?php echo $a; ?>
		<div id="login-modal" style="display:none;">
			<div id="login-container">
			Login
			<form id="login" action="/user/login">
				<input type="text" class="login-field" placeholder="username">
				<input type="password" class="login-field" placeholder="password">
				<button type="submit" class="login-field button">Login</button>
			</form>
			</div>
		</div>
	</body>
</html>