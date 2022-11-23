<?php
   //INCLUDE DATABASE FILE
   include('../config/connection.php');

   //get id 
   $id= $_GET['id1'];

   //remplir the form
   $req = "SELECT p.id as id, p.name as name_product, p.quantity, p.price, c.id as idcat , c.name  as name_category, p.image, p.description
   FROM product p
   INNER JOIN category c on  c.id = p.category WHERE $id=p.id";  
   $data = mysqli_query($GLOBALS['connection'] ,$req);
   $row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
	<?php
		include('../includes/header.php');
	?>
<body class="body">
    <!-- Produts MODAL -->
	<div class="card w-50 m-auto mt-2">
		<div class="card-body">
				<form action="../config/scripts.php" method="POST" id="form-product">
					<div class="card-header bg-white">
						<h5 class="card-title">Add Product</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<input  type="hidden" class="form-control" value="<?=$row['id']?>" name="id" id="id"/>
						</div>
						<div class="mb-3">
							<label class="form-label">Name of product</label>
							<input  type="text" class="form-control" value="<?=$row['name_product']?>" name="name" id="name"/>
						</div>
						<div class="mb-3">
							<label class="text">Quantity</label>
							<input type="number" value="<?=$row['quantity'] ?>" class="form-control" name="quantity" id="quantity" >
						</div>
						<div class="mb-3">
							<label class="form-label" >Price</label>
							<div class="input-group">
								<div class="input-group-text">MAD</div>
								<input type="number" value="<?=$row['price']?>" name="price" class="form-control" id="autoSizingInputGroup">
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Category</label> 
							<select class="form-select"  name="category" id="category">
								<option value="<?=$row['idcat']?>"><?=$row['name_category']?></option>
								<option value="1">Ordinateurs </option>
								<option value="2">Accessoires </option>
							</select>

						</div>
						<div class="input-group">
							<input type="file" class="form-control"  id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
						</div>
						<div class="mb-0">
							<label class="form-label">Description</label>
							<textarea class="form-control" rows="5"  name="description" id="product-description"><?= $row['description'] ?></textarea>
						</div>
					
					</div>
					<div class="card-footer bg-white">
						<div class="float-end">
							<a href="../index.php" class="btn btn-white">Cancel</a>
							<button type="submit" name="update" class="btn btn-warning product-action-btn" id="product-edit-btn"> Edit</button>	
						</div>	
					</div>
				</form>
		</div>
	</div>	
<!-- ================== BEGIN core-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- ================== END core-js ================== -->  
</body>
</html>

