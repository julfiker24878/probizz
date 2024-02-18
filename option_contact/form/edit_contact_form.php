<?php
session_start();
require '../../session.php';
require '../../db.php';
require '../../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM contact_form WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Message</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_contact_form.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="name" class="form-label">Clients Name</label>
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<input value="<?= $after_assoc['name']; ?>" name="name" type="text" class="form-control" id="name">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="email" class="form-label">Email Address</label>
								<input value="<?= $after_assoc['email']; ?>" name="email" type="text" class="form-control" id="email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="subject" class="form-label">Subject</label>
								<input value="<?= $after_assoc['subject']; ?>" name="subject" type="text" class="form-control" id="subject">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="message" class="form-label">Message</label>
						<textarea name="message" class="form-control" id="message" rows="5"><?= $after_assoc['message']; ?></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../../dashboard_includes/footer.php'; ?>

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