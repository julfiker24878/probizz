<?php
session_start();
require '../db.php';
require '../session.php';

// SELECT QUERY FOR TRASHED USERS //
$select = "SELECT * FROM users WHERE status=1";
$select_result = mysqli_query($db_connect, $select);
?>

<?php require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header bg-warning text-dark">
                <h1 style="color: #000000; font-family: 'Montserrat', sans-serif;">Trashed Users</h1>
            </div>

            <!-- SESSION FOR SUCCESS RESTORE -->
            <?php if(isset($_SESSION['restored'])){ ?>
                <div class="alert alert-success mt-2">
                    <?php echo $_SESSION['restored']; ?>
                </div>
            <?php } unset($_SESSION['restored']); ?>

            <!-- SESSION FOR MARKED SUCCESS -->
            <?php if(isset($_SESSION['marked_success'])){ ?>
                <div class="alert alert-success mt-2">
                    <?php echo $_SESSION['marked_success']; ?>
                </div>
            <?php } unset($_SESSION['marked_success']); ?>

            <!-- SESSION FOR MARKED DELETE -->
            <?php if(isset($_SESSION['marked_delete'])){ ?>
                <div class="alert alert-success mt-2">
                    <?php echo $_SESSION['marked_delete']; ?>
                </div>
            <?php } unset($_SESSION['marked_delete']); ?>

            <!-- CARD BODY -->
            <div class="card-body">
            <form action="mark_restore.php" method="POST">
                <table class="table">
                    <thead><!-- TABLE HEADER -->
                        <tr>
                            <th scope="col"><input type="checkbox" id="checkAll"> Check All</th>
                            <th scope="col">T.T.U.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Profile Image</th>
                            <th scope="col">User Role</th>
                            <th scope="col">Restore</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody><!-- TABLE BODY -->
                        <?php foreach($select_result as $key=>$select_results){ ?>
                        <tr>
                            <th><input type="checkbox" name="marked[]" value="<?php echo $select_results['id']; ?>"></th>
                            <th><?php echo $key+1; ?></th>
                            <td><?php echo $select_results['name']; ?></td>
                            <td><?php echo $select_results['email']; ?></td>
                            <td>
                                <img class="rounded-circle" width="60" height="60" src="uploaded/<?php echo $select_results['profile_image']; ?>" alt="">
                            </td>
                            <td><?php echo $select_results['role']; ?></td>
                            <td><a href="restore.php?id=<?php echo $select_results['id']; ?>" class="btn btn-info"><i class="fas fa-undo-alt"></i></a></td>
                            <td><a id="delete.php?id=<?= $select_results['id']; ?>" class="btn btn-danger delete_btn text-light"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <button name="res" type="submit" class="btn btn-info">Restore All</button>
                <button name="del" type="submit" class="btn btn-danger">Delete All</button>
            </form>

            <!-- CONDITION FOR 0 ROWS IN DATABASE -->
            <?php
                $rowcount = mysqli_num_rows($select_result);
                if($rowcount == 0){
            ?>
            <div class="alert alert-info mt-2">
                <?php echo "No data found!" ?>
            </div>
            <?php } ?>

            </div>
        </div>
    </div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>

<!-- CONFIRMATION FOR DELETE IN SWEET ALERT -->
<script type="text/javascript">
    $('.delete_btn').click(function(){
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = $(this).attr('id');
          }
        })
    })
</script>

<!-- SWEET ALERT DELETE SESSION -->
<?php if(isset($_SESSION['deleted'])){ ?>
    <script type="text/javascript">
        Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
    </script>
<?php } unset($_SESSION['deleted']); ?>

<!-- MARK SELECT JAVASCRIPT -->
<script type="text/javascript">
    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>