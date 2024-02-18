<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM menu WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h2>Edit Menu Item</h2>
			</div>
			
			<div class="card-body">
				<form action="update_menu.php" method="POST">
					<div class="mb-3"><!-- MENU NAME -->
						<label for="name" class="form-label">Name</label>
						<input value="<?= $after_assoc['id']; ?>" type="hidden" name="id">
						<input value="<?= $after_assoc['name']; ?>" name="name" type="text" class="form-control" id="name">
					</div>
					<div class="mb-3"><!-- LINK -->
						<label for="link" class="form-label">Link</label>
						<input value="<?= $after_assoc['link']; ?>" name="link" type="text" class="form-control" id="link">
					</div>
					<button type="submit" class="btn btn-primary">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>

<!-- SWEET ALERT -->
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire(
            'Done!',
            '<?= $_SESSION['success']; ?>',
            'success'
            )
    </script>
<?php } unset($_SESSION['success']); ?>