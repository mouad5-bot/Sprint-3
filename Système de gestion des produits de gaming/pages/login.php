<?php
    include('../index.php');
?>

		<div class="main d-flex">
			<div>
				<img src="./Assets/image/login.png" alt="login">
			</div>
			<div class="card">
				<div class="card-body">
					<h1 class="card-title text-info text-center mb-3">Sign in</h1>
					<form action="index.php" method="POST">
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
								<button class="btn btn-info text-white" type="submit" name="log in">log in</button>
								<span>Don't have an account ? <a href=""> Signup now </a></span>
							</div>
						</div>	
					</form>
				</div>
			</div>
		</div>