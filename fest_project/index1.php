<?php
    //for establishing the connection
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/style.css">
<title>Sanskruti</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="second.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="second.css" />
    <script src="three.js"></script>
   
</style>
</head>
<body style="background-color:#bdc3c7">
<div>
<div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
            <a href="#" class="navbar-brand">Sanskruti</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="nav navbar-nav">
                    <a href="first.html#about" class="nav-item nav-link">About Sanskruti</a>
                    <a href="first.html#p" class="nav-item nav-link">Previous year Guest</a>
                    <a href="first.html#h" class="nav-item nav-link">How to reach</a>
                    <a href="first.html#m" class="nav-item nav-link">Map</a>
                    <a href="first.html#us1" class="nav-item nav-link">CONTACT us</a>
                    <a href="first.html#event" class="nav-item nav-link">our Event</a>
                </div>
            </div>
        </nav>
    </div>
   
<div >
            <h1 class="a2"> Register with us</h1>
    </div>
	<center><h2>Ticket booking form</h2></center>
		<form action="index1.php" method="post">
			<div class="inner_container">
			    <label><b>Full Name</b></label>
				<input type="text" placeholder="Enter full name" name="fname" required>
				<label><b>Event name</b></label>
                <select class="event" name="event">
                <option value="cricket">cricket</option>
                <option value="chess">chess</option>
                <option value="quiz">quiz</option>
                <option value="dance">dance</option>
                <option value="sing">sing</option>
                <option value="pubg">pubg</option>
                </select><br>
				<label><b>Gender: </b></label>
				<input type="text" placeholder="Enter gender" name="gender" required>
				<label><b>Mobile no</b></label>
				<input type="text" placeholder="Enter mobile no" name="phone" required>
				<label><b>Gmail</b></label>
				<input type="text" placeholder="Enter gmail" name="gmail" required>
				<button name="submit" class="sign_up_btn" type="submit">submit</button>
			</div>
		</form>
		
        <?php
    if(isset($_POST['submit']))
    {
                @$event=$_POST['event'];
				@$gender=$_POST['gender'];
				@$phone=$_POST['phone'];
				@$gmail=$_POST['gmail'];
				@$fname=$_POST['fname'];
            $query = "insert into ticket values( '$fname','$event','$gender','$phone','$gmail')";
            mysqli_query($con,$query);
            $_SESSION['fname'] = $fname;
            header( "Location: homepage.php");

    }
		?>
    <section id="us1">
    <div class="footer" style="margin-top:2px;">
        <div class="footer-content">
            <div class="footer-section about">
            <center>
                <h1 class="logo-text"><span>CONTACT US</span></h1>
                <p> hey everyone
                </p>
                <div class="contact">
                    <span><i class="fa fa-phone"></i> &nbsp;   9108390695</span>
                    <span><i class="fa fa-envelope"></i> &nbsp;   bibek.bhattarai072@gmail.com</span>
                    <span><i class="fa fa-phone"></i> &nbsp;   7023283901</span>
                    <span><i class="fa fa-envelope"></i> &nbsp;   ashish05219@gmail.com</span>
                </div>
                </center>
                <div class="wrapper">
                    <a href="https://www.google.com/"><i class="fa fa-3x fa-google-plus"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa fa-3x fa-instagram"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa fa-3x fa-facebook-square"></i></a>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            &copy; Copyright ©Dr Ambedkar Institute Of Technology
        </div>
    </div>
</section>
	</div>
</body>
</html>