<?php
session_start();
require '../session.php';
require '../db.php';

// GETTING ID FROM URL //
$id = $_GET['id'];

// SELECT QUERY //
$select = "SELECT * FROM users WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);
?>

<?php require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header bg-primary text-light">
                <h1 style="color: #fff; font-family: 'Montserrat', sans-serif;"><?= $after_assoc['name']; ?> Information</h1>
            </div>
            <!-- CARD BODY -->
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Profile Photo</th>
                            <td>
                                <img width="450" height="450" src="uploaded/<?php echo $after_assoc['profile_image']; ?>" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><?= $after_assoc['name']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $after_assoc['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>
                                <!-- CONDITION FOR USER ROLE -->
                                <?php
                                    if($after_assoc['role'] == 0){
                                        echo "Member";
                                    }elseif($after_assoc['role'] == 1){
                                        echo "Admin";
                                    }elseif($after_assoc['role'] == 2){
                                        echo "Moderator";
                                    }elseif($after_assoc['role'] == 3){
                                        echo "Editor";
                                    }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>