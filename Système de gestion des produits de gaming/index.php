
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
	<!-- BEGIN #navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div class="logo"> 
			<a href="index.php"><span class="ms-4"> <img src="./Assets/image/logo.png" alt="logo"> </span></a>
		</div>
		<div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01" >
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active h4">
					<a class="nav-link text-white" href="#">Home </a>
				</li>
				<li class="nav-item h4">
					<a class="nav-link text-white" href="#">Profil</a>
				</li>
				<li class="nav-item h4">
					<a class="nav-link text-white" href="#">Products</a>
				</li>
			</ul>
		</div>
		<div class="d-flex align-items-center h5 me-5 ">
			<a href="config/scripts.php?logout=1" name="logout">  <i class="bi bi-box-arrow-right logout">logout</i> </a>
		</div>
	</nav>
	<!-- FINISHED #navbar -->

    <main class="container">
		<div class="h2 mb-3">
			<u>List of products :</u> 
		</div>
        
        <div class="float-end mb-5">
          <a href="#modal-product" data-bs-toggle="modal"  class="btn btn-success btn-rounded px-4 rounded-pill">Add Product</a>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Product </th>
              <th scope="col">quantity</th>
              <th scope="col">category</th>
              <th scope="col">Description</th>
              <th scope="col">price</th>
              <th scope="col">image</th>
              <th scope="col"></th>
            </tr>
          	</thead>
          	<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
					<td>Mark</td>
					<td>Mark</td>
					<td> <a href=""> cliquer ici </a> </td>
					<td>
						<button type="button" class="btn btn-info">Edit</button>
						<button type="button" class="btn btn-danger">Delete</button>
					</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
					<td>Mark</td>
					<td>Mark</td>
					<td> <a href=""> cliquer ici </a> </td>
					<td>
						<button type="button" class="btn btn-info">Edit</button>
						<button type="button" class="btn btn-danger">Delete</button>
					</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
					<td>Mark</td>
					<td>Mark</td>
					<td> <a href=""> cliquer ici </a> </td>	
					<td>
						<button type="button" class="btn btn-info">Edit</button>
						<button type="button" class="btn btn-danger">Delete</button>
					</td>
				</tr>
          	</tbody>
        </table>
    </main>

	<?php
		include('includes/footer.php');
	?>

	<?php
		include('includes/popup.php');
	?>

	<!-- ================== BEGIN core-js ================== -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>

