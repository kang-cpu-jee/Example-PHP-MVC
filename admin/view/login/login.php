<!DOCTYPE html>
<html>
	<head>
		<title>Admin: Login</title>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="../vendor/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../assets/custom.js"></script>
		<link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/custom.css">
		<link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
		<link rel="stylesheet" href="public/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;600&display=swap" rel="stylesheet">
	</head>
	
	<body>
		<form action="" method="post" class="form-center popup-white">
			<div class="w-600">
				<div class="alert alert-info">
					<strong>Customer Login</strong>
				</div>
				
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email_lg" placeholder="Email">
						</div>
						
						<div class="form-group">
							<label for="pwd">Password</label>
							<input type="password" class="form-control" name="passlg" placeholder="Password" required>
						</div>
						
						<button type="submit" class="btn btn-default" name="signin">Sign In</button>
						<a href='index.php?page=register' class='btn btn-success'>Create an Account</a>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>