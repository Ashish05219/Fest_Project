<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Thanks <?php echo $_SESSION['fname']; ?> for ticket booking</h3></center>
		<form action="index1.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<button class="logout_button" type="submit">More ticket booking</button>	
			</div>
		</form>
		<form action="first.html" method="post">
			<div class="inner_container">
				<button class="logout_button" type="submit">Log Out</button>	
			</div>
		</form>

	</div>
</body>
</html>