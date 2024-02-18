<?php
session_start();
require '../../db.php';
require '../../session.php';
require '../../dashboard_includes/header.php';
$select = "SELECT * FROM contact_form";
$select_result = mysqli_query($db_connect, $select);
?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-info">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Clients Message</h2>
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
							<th scope="col">T.C.</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Subject</th>
							<th scope="col">Message</th>
							<th scope="col">Submitted At</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($select_result as $tc => $result){ ?>
							<tr>
								<th scope="row"><?= $tc+1; ?></th>
								<td><?= $result['name']; ?></td>
								<td><?= $result['email']; ?></td>
								<td><?= $result['subject']; ?></td>
								<td><?= $result['message']; ?></td>
								<td><?= $result['submitted_at']; ?></td>
								<td><a href="edit_contact_form.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
								<td><a href="delete_contact_form.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php
				$rowcount = mysqli_num_rows($select_result);
				if($rowcount == 0){ ?>
					<div class="alert alert-info">
						<?php echo "No clients have been contacted yet!" ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../../dashboard_includes/footer.php'; ?>