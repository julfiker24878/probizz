<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';
$select = "SELECT * FROM team_accounts";
$select_result = mysqli_query($db_connect, $select);
?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-info">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">All Accounts</h2>
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
							<th scope="col">T.A.</th>
							<th scope="col">Team Member</th>
							<th scope="col">Account Name</th>
							<th scope="col">Icon</th>
							<th scope="col">Link</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($select_result as $tp => $result){ ?>
							<tr>
								<th scope="row"><?= $tp+1; ?></th>
								<td><?php 
								if($result['member_id'] == 1){
									echo "Joy Chowdhury";
								}elseif($result['member_id'] == 2){
									echo "Shobuj Ahmed";
								}elseif($result['member_id'] == 3){
									echo "Mahbubur Rahman";
								}elseif($result['member_id'] == 4){
									echo "Ashraf Hossain";
								}elseif($result['member_id'] == 5){
									echo "Asaf Abir";
								}elseif($result['member_id'] == 6){
									echo "Md. Abdullah";
								}elseif($result['member_id'] == 7){
									echo "Israt Jahan Snigdha";
								}else{
									echo "No members have been selected!";
								}
								?>
								</td>
								<td><?= $result['account_name']; ?></td>
								<td><i class="<?= $result['icon']; ?>"></i></td>
								<td><?= $result['link']; ?></td>
								<td><a href="edit_team_accounts.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
								<td><a href="delete_team_accounts.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a></td>
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