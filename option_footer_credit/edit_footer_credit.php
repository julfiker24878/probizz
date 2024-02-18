<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM footer_credit WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Footer Credit</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_footer_credit.php" method="POST">
					<div class="mb-3"><!-- CREDIT -->
						<label for="choose_reason" class="form-label">Footer Credit</label>
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<input value="<?= $after_assoc['credit']; ?>" name="credit" type="text" class="form-control" id="choose_reason">
					</div>
					<div class="mb-3"><!-- LINK TEXT -->
						<label for="link_text" class="form-label">Link Text</label>
						<input value="<?= $after_assoc['link_text']; ?>" name="link_text" type="text" class="form-control" id="link_text">
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