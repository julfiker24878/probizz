<?php
session_start();
require '../db.php';

// PACKAGE ITEMS
$select_team_member = "SELECT * FROM team_member";
$team_member_query = mysqli_query($db_connect, $select_team_member);

require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Account</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_team_accounts.php" method="POST">
					<select name="member_id" class="form-select" aria-label="Default select example"><!-- SELECT MEMBER -->
						<option selected>-- Select Member --</option>
						<?php foreach($team_member_query as $member){ ?>
						<option value="<?= $member['id']; ?>"><?= $member['nick_name']; ?></option>
						<?php } ?>
					</select>
					<div class="mb-3"><!-- ACCOUNT NAME -->
						<label for="account_name" class="form-label mt-5">Account Name</label>
						<input name="account_name" type="text" class="form-control" id="account_name">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3"><!-- SET ICON -->
								<label for="icon" class="form-label">Set Icon</label>
								<input name="icon" type="text" class="form-control" id="icon">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3"><!-- LINK -->
								<label for="link" class="form-label">Link</label>
								<input name="link" type="text" class="form-control" id="link">
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Add</button>
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