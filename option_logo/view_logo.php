<?php
session_start();
require '../db.php';
require '../session.php';
require '../dashboard_includes/header.php';

// SELECT QUERY FOR LOGO TABLE //
$select = "SELECT * FROM logo";
$select_result = mysqli_query($db_connect, $select);
?>

<!-- START ROW -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header bg-primary">
                <h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Logo</h2>
            </div>
            <!-- SESSION FOR DELETE -->
            <?php if(isset($_SESSION['deleted'])){ ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['deleted']; ?>
                </div>
            <?php } unset($_SESSION['deleted']); ?>
            <!-- CARD BODY -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <!-- TABLE HEADER -->
                        <tr>
                            <th scope="col">T.L.</th>
                            <th scope="col">Logo Image</th>
                            <th scope="col">Logo Text</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($select_result as $tl => $result){ ?>
                            <!-- TABLE BODY -->
                            <tr>
                                <th scope="row"><?= $tl+1; ?></th>
                                <td>
                                <img src="uploaded/<?= $result['logo_image']; ?>" width='50' class='img-fluid'>
                                </td>
                                <td><?= $result['logo_text']; ?></td>
                                <td>
                                    <a style="border-radius: 5px;" href="edit_logo.php?id=<?= $result['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <a style="border-radius: 5px;" href="delete_logo.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- CONDITION FOR 0 ROW FOUND IN DATABASE -->
                <?php
                    $rowcount = mysqli_num_rows($select_result);
                    if($rowcount == 0){ ?>
                    <div class="alert alert-info">
                        <?php echo "No logos have been added yet!" ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>