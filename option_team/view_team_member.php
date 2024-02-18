<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM team_member";
$select_result = mysqli_query($db_connect, $select);
?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-info">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">All Team Members</h2>
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
							<th scope="col">T.T.M.</th>
							<th scope="col">Nick Name</th>
							<th scope="col">First Name</th>
							<th scope="col">Last Name</th>
							<th scope="col">Designation</th>
							<th scope="col">Profile Image</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($select_result as $tb => $result){ ?>
							<tr>
								<th scope="row"><?= $tb+1; ?></th>
								<td><?= $result['nick_name']; ?></td>
								<td><?= $result['first_name']; ?></td>
								<td><?= $result['last_name']; ?></td>
								<td><?= $result['designation']; ?></td>
								<td>
								<img src="uploaded/<?= $result['profile_image']; ?>" width='50' class='img-fluid'>
								</td>
								<td><a href="edit_team_member.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
								<td><a href="delete_team_member.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a></td>
								<td>
									<?php if($result['status'] == 0){ ?>
										<a href="status.php?id=<?= $result['id']; ?>" class="btn btn-secondary">Deactive</a>
									<?php }else{ ?>
										<a href="status.php?id=<?= $result['id']; ?>" class="btn btn-success">Active</a>
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
						<?php echo "No members have been added yet!" ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>