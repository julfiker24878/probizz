<?php
session_start();
require '../../session.php';
require '../../db.php';
require '../../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM team_header WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Header Content of Team Section</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_header.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- SUB TITLE -->
						<label for="sub_title" class="form-label">Sub Title</label>
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<input value="<?= $after_assoc['sub_title']; ?>" name="sub_title" type="text" class="form-control" id="sub_title">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3"><!-- TITLE RED -->
								<label for="title" class="form-label">Title First Part Red</label>
								<input value="<?= $after_assoc['title_red']; ?>" name="title_red" type="text" class="form-control" id="title">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3"><!-- TITLE BLUE -->
								<label for="title" class="form-label">Title Second Part Blue</label>
								<input value="<?= $after_assoc['title_blue']; ?>" name="title_blue" type="text" class="form-control" id="title">
							</div>
						</div>
					</div>
					<div class="mb-3"><!-- DESCRIPTION -->
						<label for="des" class="form-label">Description</label>
						<textarea name="des" class="form-control" id="des" rows="5"><?= $after_assoc['des']; ?></textarea>
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