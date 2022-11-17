<?php
    include('config/scripts.php');
?>

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
		<!-- BEGIN #header -->
		<div class="navbar navbar-dark bg-dark justify-content-between ">
			<div> 
				<a href="index.php"><span class="ms-4"> <img src="./Assets/image/logo.png" alt="logo"> </span></a>
			</div>
			<div class="d-flex align-items-center h4">
				<span class="text-white "> <i class="bi bi-person-circle "></i> Admin</span>
			</div>	
			<div class="d-flex align-items-center h5 me-5">
				<span class="text-white "> <i class="bi bi-box-arrow-right"></i> logout</span>
			</div>	
		</div>
		<!-- Finished #header -->

		<main class="container">
			<div class="h2 mb-5">
				<u>List of products :</u> 
			</div>
			
			<div class="align-items-center">
				<a href=""  class="btn btn-success btn-rounded px-4 rounded-pill">Add Product</a>
			</div>

			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Product </th>
						<th scope="col">quantity</th>
						<th scope="col">status</th>
						<th scope="col">Description</th>
						<th scope="col">price</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Mark</td>
						<td></td>
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
						<td>
							<button type="button" class="btn btn-info">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
		</main>

		<!-- BEGIN #footer -->
		<div class="footer">
			<p>©  2020 YouCode - All Rights Reserved.</p>
		</div>
		<!-- Finished #footer -->

	<!-- ================== BEGIN core-js ================== -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>