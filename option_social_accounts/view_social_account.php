<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM social_accounts";
$select_result = mysqli_query($db_connect, $select);
?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header bg-info">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">All Social Accounts</h2>
			</div>

			<?php if(isset($_SESSION['deleted'])){ ?>
				<div class="alert alert-danger">
					<?= $_SESSION['deleted']; ?>
				</div>
			<?php } unset($_SESSION['deleted']); ?>

			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">T.S.A.</th>
							<th scope="col">Account Name</th>
							<th scope="col">Icon</th>
							<th scope="col">Link</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($select_result as $ts => $result){ ?>
							<tr>
								<th scope="row"><?= $ts+1; ?></th>
								<td><?= $result['account_name']; ?></td>
								<td><i class="<?= $result['icon']; ?>"></i></td>
								<td><?= $result['link']; ?></td>
								<td><a href="edit_social_account.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
								<td><a href="delete_social_account.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a></td>
								<td>
									<?php if($result['status'] == 1){ ?>
										<a href="status.php?id=<?= $result['id']; ?>" class="btn btn-success">Active</a>
									<?php }else{ ?>
										<a href="status.php?id=<?= $result['id']; ?>" class="btn btn-secondary">Deactive</a>
									<?php } ?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php
				$rowcount = mysqli_num_rows($select_result);
				if($rowcount == 0){ ?>
				<div class="alert alert-info">
					<?php echo "No Accounts have been added yet!" ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>