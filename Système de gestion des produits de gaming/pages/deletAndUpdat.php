<?php
   //INCLUDE DATABASE FILE
   include('../config/connection.php');

   $id = $_GET['id1'];

   $req = "SELECT p.id as id, p.name as name_product, p.quantity, p.price, c.name  as name_category, p.image, p.description
   FROM product p
   INNER JOIN category c on  c.id = p.category WHERE $id=p.id";  
   $data = mysqli_query($GLOBALS['connection'] ,$req);
   $row = mysqli_fetch_assoc($data);

   if(issse)
    
   mysqli_close($GLOBALS['connection']); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update & delete</title>
    <!-- ================== BEGIN core-css ================== -->
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
</head>
<body>
    <!-- Produts MODAL -->
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="config/scripts.php" method="POST" id="form-product">
					<div class="modal-header">
						<h5 class="modal-title">Add Product</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label class="form-label">Name of product</label>
							<input  type="text" class="form-control" value="<?=$row['name_product']?>" name="name" id="name"/>
						</div>
						<div class="mb-3">
							<label class="text" for="" >Quantity</label>
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
							<select class="form-select" value="<?=$row['name_category']?>" name="category" id="category">
								<option value="">Please select</option>
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
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save_product"   class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
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