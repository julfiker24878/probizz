<?php
session_start();
require '../db.php';

//PORTFOLIO TABS
$select_portfolio_tabs = "SELECT * FROM portfolio_tabs";
$portfolio_tabs_query = mysqli_query($db_connect, $select_portfolio_tabs);

require '../dashboard_includes/header.php'; 
?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Porfolio Image</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="portfolio_image_post.php" method="POST" enctype="multipart/form-data">

					<div class="mb-3"><!-- PORTFOLIO IMAGE -->
						<label for="img" class="form-label">Portfolio Image</label>
						<input name="image" type="file" class="form-control" id="img">
						<?php if(isset($_SESSION['invalid_extension'])){ ?>
							<div class="alert alert-warning mt-2">
								<?= $_SESSION['invalid_extension']; ?>
							</div>
						<?php } unset($_SESSION['invalid_extension']); ?>

						<?php if(isset($_SESSION['invalid_size'])){ ?>
							<div class="alert alert-warning mt-2">
								<?= $_SESSION['invalid_size']; ?>
							</div>
						<?php } unset($_SESSION['invalid_size']); ?>
					</div>

						<div class="form-check form-check-inline mt-3"><!-- SELECT TABS -->
							<input class="form-check-input" type="checkbox" id="checkAll">
							<label class="form-check-label" for="checkAll">Select All</label>
						</div>

					<?php foreach($portfolio_tabs_query as $tabs){ ?>
						<div class="form-check form-check-inline mt-3">
							<input name="all_selected[]" class="form-check-input" type="checkbox" id="id<?= $tabs['id']; ?>" value="<?= $tabs['title']; ?>">
							
							<label style="text-transform: capitalize;" class="form-check-label" for="id<?= $tabs['id']; ?>"><?= $tabs['title']; ?></label>
						</div>
					<?php } ?>
					

					<button type="submit" class="btn btn-primary d-block mt-4">Add</button>
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

<script type="text/javascript">
    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>