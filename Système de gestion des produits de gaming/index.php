
<?php
    include('config/scripts.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Gaming | products</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="in this website you can find all the gaming products that you need" name="description" />
		
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
			<span class="text-white h4"><i class="bi bi-person-circle"></i> <?=$_SESSION['admin_name']?> </span>
		</div>
		<div class="d-flex align-items-center h5 me-5 ">
			<a href="config/scripts.php?logout=1" name="logout">  <i class="bi bi-box-arrow-right logout">logout</i> </a>
		</div>
	</nav>
	<!-- FINISHED #navbar -->

	<!-- session code	-->
	<?php if (isset($_SESSION['success'])): ?>
		<div class="alert alert-success m-5" role="alert">
			<strong>Success!</strong>
				<?php 
					echo $_SESSION['success']; 
				?>
		</div>

	<?php
	unset($_SESSION['success']);
	endif 
	?>


	<?php if (isset($_SESSION['error'])): ?>
		<div class="alert alert-danger m-5" role="alert">
			<strong>Error!</strong>
				<?php 
					echo $_SESSION['error']; 
				?>
		</div>

	<?php
	unset($_SESSION['error']);
	endif 
	?>

	<!-- finished session code -->
	
    <main class="container">

		<div class="row row-cols-lg-4 row-cols-sm-2 m-3 justify-content-between">
			<div class="card text-black bg-light text-center" style="max-width: 18rem;">
				<div class="card-header h4">category</div>
				<div class="card-body">
						<h5 class="card-title text-success"> <?=coutCategory();?> </h5>
				</div>
			</div>
			<div class="card text-black bg-light text-center" style="max-width: 18rem;">
				<div class="card-header h4">Product</div>
				<div class="card-body">
					<h5 class="card-title text-success"> <?=coutProduct();?> </h5>
				</div>
			</div>
			<div class="card text-black bg-light text-center" style="max-width: 18rem;">
				<div class="card-header h4">Price </div>
				<div class="card-body">
						<h5 class="card-title text-success"> <?=sumPrice();?> MAD</h5>
				</div>
			</div>
			<div class="card text-black bg-light text-center"  style="max-width: 18rem;">
				<div class="card-header h4 ">Admin</div>
				<div class="card-body">
						<h5 class="card-title text-success"> <?=countAdmin();?> </h5>
				</div>
			</div>
		</div>
		<hr>
		<div class="d-flex justify-content-between mt-5">
			<div class='h3'>
				<u>List of products :</u> 
			</div>
			<div class=" mb-5">
				<a href="#modal-product" data-bs-toggle="modal"  class="btn btn-success btn-rounded px-4 rounded-pill">Add Product</a>
			</div>
		</div>
        <div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">image</th>
						<th scope="col">Product </th>
						<th scope="col">quantity</th>
						<th scope="col">price</th>
						<th scope="col">category</th>
						<th scope="col">Description</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					
				<?php
					//DATA FROM getproducts() FUNCTION
					$products=getProducts();
					foreach($products as $row)
					{
				?>
						<tr>
							<th scope="row"> <?=$row['id'] ?></th>
							<td> <img src="Assets/upload_image/<?=$row['image'] ?>" alt="productImage"></td>
							<td> <?=$row['name_product']  ?></td>
							<td> <?=$row['quantity']  ?></td>
							<td> <?=$row['price']   ?></td>
							<td> <?=$row['name_category']?></td>
							<td title="<?=$row['description']?>"><?php echo substr($row['description'],0,30); ?> ...</td>
							<td>
								<a href="pages/deletAndUpdat.php?id1=<?=$row['id']?>"><button type="button" class="btn btn-outline-info">Edit</button></a>	
							</td>
							<td>	
								<a href="config/scripts.php?delete=<?=$row['id']?>"><button type="button" 	name="delete" class="btn btn-outline-danger">Delete</button>
							</td>
						</tr>
					<?php } ?>	
				</tbody>
			</table>
		</div>
    </main>

	<?php
		include('includes/footer.php');
	?>

	<!-- Produts MODAL -->
	<div class="modal fade" id="modal-product">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="config/scripts.php" method="POST" id="form-product" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Product</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<!-- This Input Allows Storing product Index  -->
						<input type="hidden" id="product-id">
						<div class="mb-3">
							<label class="form-label">Name of product</label>
							<input  type="text" class="form-control" name="name" id="title"/>
						</div>
						<div class="mb-3">
							<label class="text" for="" >Quantity</label>
							<input type="number" class="form-control" name="quantity" id="quantity" >
						</div>
						<div class="mb-3">
							<label class="form-label" >Price</label>
							<div class="input-group">
								<div class="input-group-text">MAD</div>
								<input type="number" name="price" class="form-control" id="autoSizingInputGroup">
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Category</label> 
							<select class="form-select" name="category" id="category">
							<option value="">Please select</option>
							<?php 
								$table = 'categorie';
								$data = getdata($table);
								foreach ($data as $categorie) {
									echo "<option value=".$categorie['id']."> $categorie[name] </option>";
								}
							?>
								<!-- <option value="">Please select</option> 
								<option value="1">Ordinateurs </option>
								<option value="2">Accessoires </option> -->



							</select>
						</div>
						<div class="input-group">
							<input type="file" class="form-control" id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
						</div>
						<div class="mb-0">
							<label class="form-label">Description</label>
							<textarea class="form-control" rows="5" name="description" id="product-description"></textarea>
						</div>
					
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save_product"   class="btn btn-primary product-action-btn" id="product-save-btn">Save</button>
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

