<?php
session_start();
require '../db.php';
require '../session.php';

// SELECT QUERY //
$select = "SELECT * FROM users WHERE status=0";
$select_result = mysqli_query($db_connect, $select);
?>

<?php require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header bg-primary text-light">
                <h1 style="color: #fff; font-family: 'Montserrat', sans-serif;">Registered Users <?php if($_SESSION['user_role'] == 1){ ?><a style="color: #fff; font-family: 'Montserrat', sans-serif;" href="trashed.php" class="btnbtn-warning float-end">Trash Box</a><?php } ?></h1>
            </div>

            <!-- SESSION FOR SUCCESS TRASHED -->
            <?php if(isset($_SESSION['trashed'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['trashed']; ?>
                </div>
            <?php } unset($_SESSION['trashed']); ?>

            <!-- SESSION FOR MARKED TRASH SUCCESS -->
            <?php if(isset($_SESSION['mark_trash_success'])){ ?>
                <div class="alert alert-warning mt-2">
                    <?php echo $_SESSION['mark_trash_success']; ?>
                </div>
            <?php } unset($_SESSION['mark_trash_success']); ?>

            <!-- CARD BODY -->
            <div class="card-body">
                <form action="mark_trash.php" method="POST">
                    <table class="table">
                        <thead><!-- TABLE HEADER -->
                            <tr>
                                <th scope="col"><input type="checkbox" id="checkAll"> Check All</th>
                                <th scope="col">T.U.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Profile Image</th>
                                <th scope="col">User Role</th>
                                <th scope="col">Edit</th>
                                <th scope="col">View</th>
                                <th scope="col">Trash</th>
                            </tr>
                        </thead>
                        <tbody><!-- TABLE BODY -->
                            <?php foreach($select_result as $key=>$select_results){ ?>
                                <tr>
                                    <th><input type="checkbox" name="mark_trash[]" value="<?php echo $select_results['id']; ?>"></th>
                                    <th><?php echo $key+1; ?></th>
                                    <td><?php echo $select_results['name']; ?></td>
                                    <td><?php echo $select_results['email']; ?></td>
                                    <td>
                                        <img class="rounded-circle" width="60" height="60" src="uploaded/<?php echo $select_results['profile_image']; ?>" alt="">
                                    </td>
                                    <td><?php
                                            if($select_results['role'] == 0){
                                                echo "Member";
                                            }elseif($select_results['role'] == 1){
                                                echo "Admin";
                                            }elseif($select_results['role'] == 2){
                                                echo "Moderator";
                                            }elseif($select_results['role'] == 3){
                                                echo "Editor";
                                            }
                                        ?>
                                    </td>
                                    <!-- EDIT BUTTON -->
                                    <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
                                    <td>
                                        <a style="border-radius: 5px;" href="edit.php?id=<?php echo $select_results['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <?php } ?>
                                    <!-- VIEW BUTTON -->
                                    <td>
                                        <a style="border-radius: 5px;" href="single_view.php?id=<?php echo $select_results['id']; ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <!-- TRASH BUTTON -->
                                    <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2){ ?>
                                    <td>
                                        <a style="border-radius: 5px;" href="trash.php?id=<?php echo $select_results['id']; ?>" class="btn btn-warning">
                                        <?php if($select_results['role'] == 1){
                                            echo "Admin";
                                        }else{
                                            echo "<i class='fas fa-trash-alt'></i>";
                                        } ?>
                                        </a>
                                    </td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-warning">Trash All</button>
                </form>

                <!-- CONDITION FOR 0 ROW IN DATABASE -->
                <?php
                    $rowcount = mysqli_num_rows($select_result);
                    if($rowcount == 0){
                ?>
                <div class="alert alert-info mt-2">
                    <?php echo "No user has been added yet!" ?>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>

<!-- SCRIPT FOR MARK SELECT -->
<script type="text/javascript">
    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>

<!-- SESSION FOR FAIL IN SWEET ALERT -->
<?php if(isset($_SESSION['failed'])){ ?>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: "You can't remove an Admin!"
        })
    </script>
<?php } unset($_SESSION['failed']); ?>