<?php
    include('../includes/header.php');
?>
<body>
	<?php
		include('../includes/navbar.php');
	?> 
  
  
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
		include('../includes/footer.php');
	?>

	<?php
		include('../includes/popup.php');
	?>
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>