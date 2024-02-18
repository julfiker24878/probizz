<?php 
session_start();
require 'session.php';
require 'dashboard_includes/header.php';
?>
<section id="all_section">
    <div class="row">

        <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2 || $_SESSION['user_role'] == 3){ ?>
        <!--===== USERS =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Users</h3>
                <a href="/probizz/dashboard_items/users.php"><i class="fas fa-user"></i></a>
            </div>
        </div>
        <?php } ?>

        <!--===== NAVBAR =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Navbar</h3>
                <a href="/probizz/dashboard_items/navbar.php"><i class="fas fa-bars"></i></a>
            </div>
        </div>

        <!--===== SOCIAL ACCOUNTS =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Social Accounts</h3>
                <a href="/probizz/dashboard_items/social_accounts.php"><i class="fas fa-share-alt"></i></a>
            </div>
        </div>

        <!--===== BANNER =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Banner</h3>
                <a href="/probizz/dashboard_items/banner.php"><i class="fas fa-images"></i></a>
            </div>
        </div>

        <!--===== THREE COL =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Three Column Feature</h3>
                <a href="/probizz/dashboard_items/three_col.php"><i class="fas fa-columns"></i></a>
            </div>
        </div>

        <!--===== ABOUT =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>About</h3>
                <a href="/probizz/dashboard_items/about.php"><i class="fas fa-address-card"></i></a>
            </div>
        </div>

        <!--===== SERVICES =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Services</h3>
                <a href="/probizz/dashboard_items/services.php"><i class="fas fa-cogs"></i></a>
            </div>
        </div>

        <!--===== PORTFOLIO =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Portfolio</h3>
                <a href="/probizz/dashboard_items/portfolio.php"><i class="fas fa-layer-group"></i></a>
            </div>
        </div>

        <!--===== BANNER CONTACT =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Banner Contact</h3>
                <a href="/probizz/dashboard_items/contact.php"><i class="fas fa-envelope"></i></a>
            </div>
        </div>

        <!--===== FEATURES =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Features</h3>
                <a href="/probizz/dashboard_items/feature.php"><i class="fas fa-magic"></i></a>
            </div>
        </div>

        <!--===== SUBSCRIBE =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Subscribe</h3>
                <a href="/probizz/dashboard_items/subscribe.php"><i class="fas fa-bell"></i></a>
            </div>
        </div>

        <!--===== PRICING =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Pricing</h3>
                <a href="/probizz/dashboard_items/pricing.php"><i class="fas fa-dollar-sign"></i></a>
            </div>
        </div>

        <!--===== COUNTER =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Counter/Project Stats</h3>
                <a href="/probizz/dashboard_items/counter.php"><i class="fas fa-poll"></i></a>
            </div>
        </div>

        <!--===== TEAM =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Team</h3>
                <a href="/probizz/dashboard_items/team.php"><i class="fas fa-users"></i></a>
            </div>
        </div>

        <!--===== TESTIMONIAL =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Testimonial</h3>
                <a href="/probizz/dashboard_items/testimonial.php"><i class="fas fa-star"></i></a>
            </div>
        </div>

        <!--===== LATEST BLOG =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Latest Blog</h3>
                <a href="/probizz/dashboard_items/latest_blog.php"><i class="fas fa-blog"></i></a>
            </div>
        </div>

        <!--===== CONTACT =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Contact</h3>
                <a href="/probizz/dashboard_items/contact.php"><i class="fas fa-address-book"></i></a>
            </div>
        </div>

        <!--===== FOOTER =====-->
        <div class="col-md-3">
            <div class="item">
                <h3>Footer</h3>
                <a href="/probizz/dashboard_items/footer.php"><i class="fas fa-copyright"></i><a href="/probizz/dashboard_items/pricing.php"></a>
            </div>
        </div>

    </div>
</section>
<?php require 'dashboard_includes/footer.php'; ?>

<!-- SWEET ALERT SESSION -->
<?php if(isset($_SESSION['sweet_done'])){ ?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
            })
    </script>
<?php } unset($_SESSION['sweet_done']); ?>