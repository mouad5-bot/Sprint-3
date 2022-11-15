<head>
	<meta charset="utf-8" />
	<title>gérer les produits</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link rel="stylesheet" href="./Assets/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>
<body>
    <div class="bg-">
		<!-- BEGIN #header -->
		<div class="navbar navbar-dark bg-dark ">
			<div  class="d-flex align-items-center  ">
					<div> 
						<a href="index.php"><span class="ms-4"> <img src="./Assets/image/logo.png" alt="logo"> </span></a>
					</div>
					<div class="">
						<span class="bg-white "> <i class="bi bi-person-circle  icon-large"></i> Mouad Fifel</span>
					</div>	
			</div>	
		</div>

	
		

		<div class="card w-25 mt-5 ">
			<div class="card-body">
				<h1 class="card-title text-info text-center mb-3">Sign in</h1>
				<form methode="POST">
					<div class="">
						<div class="mb-3">
							<label for="email" class="form-label">Adress email</label>
							<input type="email" class="form-control" id="email" placeholder="veuillez entrez votre email">
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">password</label>
							<input type="password" class="form-control" id="password" placeholder="veuiller entrez votre mot de pass ">
						</div>
						<div class="d-grid gap-2">
							<button class="btn btn-info text-white" type="button">Button</button>
							<span>Don't have an account ? <a href=""> Signup now </a></span>
						</div>
					</div>	
				</form>
			</div>
		</div>
		
	</div>


	<!-- ================== BEGIN core-js ================== -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>