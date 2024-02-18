<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM counter_text WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Counter Content</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_counter.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- ICON -->
						<label for="icon" class="form-label">Icon Class</label>
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<input value="<?= $after_assoc['icon']; ?>" name="icon" type="text" class="form-control" id="icon">
					</div>
					<div class="mb-3"><!-- NUMBER -->
						<label for="num" class="form-label">Number</label>
						<input value="<?= $after_assoc['num']; ?>" name="num" type="text" class="form-control" id="num">
					</div>
					<div class="mb-3"><!-- TEXT -->
						<label for="text" class="form-label">Text</label>
						<input value="<?= $after_assoc['text']; ?>" name="text" type="text" class="form-control" id="text">
					</div>

					<button type="submit" class="btn btn-primary">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>

<!-- SUCCESS SESSION IN SWEET ALERT -->
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire(
            'Done!',
            '<?= $_SESSION['success']; ?>',
            'success'
            )
    </script>
<?php } unset($_SESSION['success']); ?>