<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

	<style>
		body {
			font-family: 'Baloo Bhai 2', cursive;
			background-image: url('images/school1.jpg');
		}

		h3 {
			font-size: 30px;
		}

		body div #btn {
			margin: 0px, 9px;
        background-color: #9fb928;
        color: rgb(231, 223, 223);
        padding: 4px 14px;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointerl;

		}
			
			

		

		.btn:hover {
			background-color: rgb(223, 176, 74);
		}
	</style>
</head>



<body>
	<center><br><br>
		<h3>School Management System</h3><br>
		<div id="btn">
		<form action="" method="POST" >
			<input type="submit" name="admin_login" value="Admin Login" required>
			<input type="submit" name="student_login" value="Student Login" required>
		</form>
		</div>
		<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>

</html>