<?php
ob_start();
session_start();
if(isset($_SESSION['user_id'])) {
	session_destroy();
	unset($_SESSION['user_login_id']);
	unset($_SESSION['user_name']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_mobile']);
	header("Location: login.php");
} else {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Registration Form in PHP with Validation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container mt-3">
		<div class="row">
			<div class="col-lg-6">
				<div class="page-header">
					<h2 class="mt-3 mb-3">Welcome $user_name</h2>
					<button class="btn btn-primary">logout</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>