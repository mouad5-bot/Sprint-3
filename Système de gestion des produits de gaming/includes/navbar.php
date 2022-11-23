
	<!-- BEGIN #navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div class="logo"> 
			<a href="../index.php"><span class="ms-4"> <img src="../Assets/image/logo.png" alt="logo"> </span></a>
		</div>
		<div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01" >
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<i class="bi bi-person-circle text-white h3"></i>
				<a class="nav-link text-white h3" href="#">Profil</a>
			</ul>
		</div>
		<div class="d-flex align-items-center h5 me-5 ">
		<?php echo (!isset($namePage))?'
			<a href="login.php"><button type="button" class="btn btn-info">Log in</button>	</a>':'
			<a href="Singup.php"><button type="button" class="btn btn-info">Log up</button>	</a>';?>
		</div>
	</nav>