<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM pricing_lists";
$select_result = mysqli_query($db_connect, $select);
?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-info">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Lists</h2>
			</div>

			<?php if(isset($_SESSION['deleted'])){ ?>
				<div class="alert alert-danger">
					<?= $_SESSION['deleted']; ?>
				</div>
			<?php } unset($_SESSION['deleted']); ?>

			<!-- CARD BODY -->
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">T.P.</th>
							<th scope="col">Package Name</th>
							<th scope="col">Lists</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($select_result as $tp => $result){ ?>
							<tr>
								<th scope="row"><?= $tp+1; ?></th>
								<td><?php 
								if($result['package_id'] == 1){
									echo "Basic";
								}elseif($result['package_id'] == 2){
									echo "Standard";
								}elseif($result['package_id'] == 3){
									echo "Premium";
								}else{
									echo "No Package has been selected!";
								}
								?>
								</td>
								<td><?= $result['list']; ?></td>
								<td><a href="edit_pricing_lists.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
								<td><a href="delete_pricing_lists.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php
				$rowcount = mysqli_num_rows($select_result);
				if($rowcount == 0){ ?>
					<div class="alert alert-info">
						<?php echo "No content have been added yet!" ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>