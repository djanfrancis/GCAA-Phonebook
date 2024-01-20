<a href="#myModal" class="trigger-btn btn btn-danger btn-sm" data-toggle="modal">Delete</a>
</div>
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure?</h4>	
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="editcode.php" method="POST" class="d-inline">
                <button type="submit" name="delete_phonebook" value="<?= $phonebook['id']; ?>" class="btn btn-danger btn-sm">Delete</button>

			</div>
		</div>
	</div>
</div>