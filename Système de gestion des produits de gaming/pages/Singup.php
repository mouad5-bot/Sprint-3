<?php
    include('../config/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<?php
		include('../includes/header.php');
	?>

<body>

	<?php 
		include('../includes/navbar.php'); 
	?>

<div class="main d-flex">
			<div>
				<img src="../Assets/image/Singup.png" alt="singup">
			</div>
			<div class="card">
				<div class="card-body">
					<h1 class="card-title text-info text-center mb-3">Sign up</h1>
					<form action="../config/scripts.php" method="POST">
						<div class="">
							<div class="mb-3">
								<label for="name" class="form-label">Full name</label>
								<input type="text" class="form-control" id="full-name"  name="full_name" 
								       placeholder="veuillez entrez votre email" required>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Adress email</label>
								<input type="email" class="form-control" id="email"  name="email" 
								       placeholder="veuillez entrez votre email" required>
							</div>
							<div class="mb-3">
								<label for="password"  class="form-label">password</label>
								<input type="password" class="form-control" id="password" name="password" 
									   placeholder="veuiller entrez votre mot de pass" required minlength="6">		
							</div>
							<div class="d-grid gap-2">
								<button class="btn btn-info text-white" type="submit" name="singup">Register</button>
								<span>Already have an account ? <a href="login.php"> Login </a></span>
							</div> 
						</div>	
					</form>
				</div>
			</div>
		</div>

	<!-- ================== BEGIN core-js ================== -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- ================== END core-js ================== -->		
</body>
</html>		