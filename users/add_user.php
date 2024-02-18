<?php
session_start();
require '../session.php';
require '../dashboard_includes/header.php';
?>

<section id="add_user">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <!-- CARD HEADER -->
                    <div class="card-header mt-4">
                        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse mb-4"><h2><span>Add</span> ProBizz <span class="tx-info tx-normal">User</span></h2></div>
                    </div>
                    <!-- CARD BODY -->
                    <div class="card-body login-wrapper">
                        <form action="post.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group"><!-- NAME -->
                            <input name="name" type="text" class="form-control" placeholder="Enter fullname">

                                <!-- SESSION FOR EMPTY NAME -->
                                <?php if(isset($_SESSION['err']['name'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['err']['name']; ?>
                                    </div>
                                <?php } unset($_SESSION['err']['name']); ?>

                                <!-- SESSION FOR LARGE NAME -->
                                <?php if(isset($_SESSION['large_name'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['large_name']; ?>
                                    </div>
                                <?php } unset($_SESSION['large_name']); ?>
                            </div>

                            <div class="form-group"><!-- EMAIL -->
                            <input name="email" type="email" class="form-control" placeholder="Enter email address">

                                <!-- SESSION FOR EMPTY EMAIL -->
                                <?php if(isset($_SESSION['err']['email'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['err']['email']; ?>
                                    </div>
                                <?php } unset($_SESSION['err']['email']); ?>

                                <!-- SESSION FOR INVALID EMAIL -->
                                <?php if(isset($_SESSION['invalid_email'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['invalid_email']; ?>
                                    </div>
                                <?php } unset($_SESSION['invalid_email']); ?>
                            </div>

                            <div class="form-group"><!-- PASSWORD -->
                            <input name="password" type="password" class="form-control" placeholder="Enter password">

                                <!-- SESSION FOR EMPTY PASSWORD -->
                                <?php if(isset($_SESSION['err']['password'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['err']['password']; ?>
                                    </div>
                                <?php } unset($_SESSION['err']['password']); ?>

                                <!-- SESSION FOR WEAK PASSWORD -->
                                <?php if(isset($_SESSION['wk_pass'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['wk_pass']; ?>
                                    </div>
                                <?php } unset($_SESSION['wk_pass']); ?>
                            </div>

                            <div class="form-group"><!-- CONFIRM PASSWORD -->
                            <input name="cpassword" type="password" class="form-control" placeholder="Confirm password">

                                <!-- SESSION FOR EMPTY CONFIRM PASSWORD FIELD -->
                                <?php if(isset($_SESSION['err']['cpassword'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['err']['cpassword']; ?>
                                    </div>
                                <?php } unset($_SESSION['err']['cpassword']); ?>

                                <!-- SESSION FOR PASSWORD UNMATCHED -->
                                <?php if(isset($_SESSION['pass_match'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['pass_match']; ?>
                                    </div>
                                <?php } unset($_SESSION['pass_match']); ?>
                            </div>

                            <label class="custom-file"><!-- PROFILE IMAGE -->
                            <input name="profile_image" type="file" id="file" class="custom-file-input form-control-lg">
                            <span class="custom-file-control"></span>
                            </label>

                                <!-- SESSION FOR INVALID IMAGE EXTENSIONS -->
                                <?php if(isset($_SESSION['invalid_extension'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['invalid_extension']; ?>
                                    </div>
                                <?php } unset($_SESSION['invalid_extension']); ?>

                                <!-- SESSION FOR LARGE IMAGE SIZE -->
                                <?php if(isset($_SESSION['invalid_size'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?php echo $_SESSION['invalid_size']; ?>
                                    </div>
                                <?php } unset($_SESSION['invalid_size']); ?>
                                
                                <div class="form-group mt-3"><!-- USER ROLE -->
                                    <label>User Role</label>
                                    <select name="role"  class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="2">Moderator</option>
                                        <option value="3">Editor</option>
                                        <option value="0">Member</option>
                                    </select>
                                </div>

                            <button type="submit" class="btn btn-info btn-block">Add</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>

<!-- SWEET ALERT SESSION -->
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire(
            'Done!',
            '<?= $_SESSION['success']; ?>',
            'success'
            )
    </script>
<?php } unset($_SESSION['success']); ?>