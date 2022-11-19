	<!-- Produts MODAL -->
	<div class="modal fade" id="modal-product">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="config/scripts.php" method="POST" id="form-product">
					<div class="modal-header">
						<h5 class="modal-title">Add Product</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing product Index  -->
							<input type="hidden" id="task-id">
							<div class="mb-3">
								<label class="form-label">Name of product</label>
								<input  type="text" class="form-control" name="task_title" id="task-title" />
							</div>


							<!-- <div class="">
									<div class="">
										<label class="text" for="" >quantity</label>
										<input type="number" class="form-control" id="quantity" placeholder="Jane Doe">
									</div>
									<div class="">
										<label class="" for="autoSizingInputGroup">price</label>
										<div class="input-group">
										<div class="input-group-text">MAD</div>
										<input type="number" class="form-control" id="autoSizingInputGroup" placeholder="tape your price here">
									</div>
							</div> -->
							
							<div class="input-group mb-3">
								<label class="form-label">category</label>
								<select class="form-select" name="category" id="category">
									<option value="">Please select</option>
									<option value="1">Ordinateurs </option>
									<option value="2">Accessoires </option>
								</select>
							</div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" rows="10" name="task_description" id="task-description"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="btn btn-danger task-action-btn"  id="task-delete-btn">Delete</a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
						<button type="submit" name="save"   class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
	</div>