<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>

	<?php
      include('header.php');
    ?>

	<div>
		<H1>Login</H1>
		<p>
			<form action="includes/login.inc.php" method="post">
				<p><input type="text" name="email" placeholder="Username"></p>
				<p><input type="password" name="password" placeholder="Password"></p>
				<p><button type="submit" name="submit">Log me in</button></p>

				<div class="additional">

				<button>forgot password</button> <input type='checkbox' >remember me</input>
				</div>
			</form>
			<?php
				if( isset($_GET["error"]) )
				{
					if( $_GET["error"] == "emptyinput" )
					{
						echo "<p>Fill in all fields!</p>";
					}
					if( $_GET["error"] == "wronglogin" )
					{
						echo "<p>Invalid login credentials!</p>";
					}
				}
			?>
		</p>
	</div>

</body>
</html>
