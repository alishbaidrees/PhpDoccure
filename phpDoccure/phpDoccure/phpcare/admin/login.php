<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Doccure - Login</title>
<?php

	include("files.php");
	include("connection.php")
	
?>
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="form-group">
<input class="form-control" type="text" placeholder="Username" name="username">
</div>
<div class="form-group">
<input class="form-control my-0" type="text" placeholder="Password" name="password">
</div>

<p class="text-danger mt-0"> 
	
	
	<?php
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			function val($data)
			{
				$data = htmlspecialchars($data);
				$data = trim($data);
				$data = stripslashes($data);
				return $data;
			}
	
			$username = val($_POST['username']);
			$password = val($_POST['password']);
			
			$sql = "select * from admin where username = '$username' and passsword = '$password'";
			$result = $conn -> query($sql);
			
			if($result -> num_rows > 0)
			{
				while($row = $result -> fetch_assoc())
				{
					session_start();
					$_SESSION['username'] = $row['username'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['img'] = $row['img'];
					header('location:index.php');
				}
			}
			
			else
			{
				$error = "Incorrect Username or Password!";
				echo($error);
			}
			
			
		}
		
?>
	</p>	
	
<div class="form-group">
<button class="btn btn-primary w-100" type="submit">Login</button>

	
	
</div>
</form>

<div class="login-or">
<span class="or-line"></span>

</div>


</div>
</div>
</div>
</div>
</div>
</div>
	
	
	
	
	
	
<?php

	include("files.php");
	
?>


</body>


</html>