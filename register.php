<!DOCTYPE html>
<html>
<head>
	<title>MySite</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="col-md-6 col-md-push-3">
			<h3>User Register</h3>
			<form action="../includes/registersub.php" method="POST">
				<div class="form-group">
					<label>Fullname</label>
					<input type="text" name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<button name="submit">Submit</button>
				</div>
				<?php if(isset($_GET['error'])){ ?>
					<div class="alert alert-danger">
						<p><?php echo $_GET['error'] ?></p>
					</div>
				<?php }else if(isset($_GET['success'])){ ?>
					<div class="alert alert-success">
						<p><?php echo $_GET['success'] ?></p>
					</div>
				<?php } ?>
			</form>
		</div>
		<p>click <a href="index.php">Here</a> to Login</p>
	</div>


	
<script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</body>
</html>