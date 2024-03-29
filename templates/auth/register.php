<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<style type="text/css">
		body{
			font: 14px sans-serif;
		}
		.wrapper{
			width: 350px;
			padding: 20px;
		}
	</style>
</head>
<body>
	<div>
		<p>please fill this form to create an account</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
				<span class="help-blcok"><?php echo $email_err; ?></span>
			</div>
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $password ?>">
				<span class="help-block"><?php echo $password_err; ?></span>
			</div>
			<div class="form-group <?php (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
				<label>Confirm Password</label>
				<input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
				<span class="help-block"><?php echo $confirm_password_err ?></span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit">
				<input type="reset" class="btn btn-default" value="Reset">
			</div>
			<p>Already have an account? <a href="../../auth/login.php">Login</a>.</p>
		</form>
	</div>
</body>
</html>
