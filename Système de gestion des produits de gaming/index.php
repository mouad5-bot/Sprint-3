
<?php
    include('config/scripts.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Gaming | products</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		
		<!-- ================== BEGIN core-css ================== -->
		<link rel="stylesheet" href="Assets/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
		<!-- ================== END core-css ================== -->
	</head>
<body>
	<?php
		include('includes/navbar.php');
	?>

   
	<div class="main d-flex">
		<div>
			<img src="Assets/image/login.png" alt="login">
		</div>
		<div class="card">
			<div class="card-body">
				<h1 class="card-title text-info text-center mb-3">Sign in</h1>
				<form action="../scipte.php" method="POST">
					<div class="">
						<div class="mb-3">
							<label for="email" class="form-label">Adress email</label>
							<input type="email" class="form-control" id="email"  name="email" placeholder="veuillez entrez votre email">
						</div>
						<div class="mb-3">
							<label for="password"  class="form-label">password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="veuiller entrez votre mot de pass ">
						</div>
						<div class="d-grid gap-2">
							<button class="btn btn-info text-white" type="submit" name="login">log in</button>
							<span>Don't have an account ? <a href="/pages/Signup.php"> Signup now </a></span>
						</div>
					</div>	
				</form>
			</div>	
		</div>
	</div>

	<?php
		include('includes/footer.php');
	?>
	<!-- ================== BEGIN core-js ================== -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>

