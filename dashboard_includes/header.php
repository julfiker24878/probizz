<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ProBizz Dashboard</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="/probizz/img/logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/themefy_icon/themify-icons.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/tagsinput/tagsinput.css" />

    <!-- date picker -->
     <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/datepicker/date-picker.css" />

     <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/vectormap-home/vectormap-2.0.2.css" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/scroll/scrollable.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/probizz/dashboard_assets/css/style.css" />
    <link rel="stylesheet" href="/probizz/dashboard_assets/css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- ============================================== 
                    Start Sidebar
 =============================================== -->
<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo text-white text-center" href="index.html"><img src="/probizz/img/logo.png" alt="logo" width="70"></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class=""> <!--===== DASHBOARD =====-->
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="/probizz/dashboard_assets/img/menu-icon/1.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Dashboard</span>
                </div>
            </a>
            <ul>
              <li><a href="/probizz/admin.php">Home</a></li>
              <li><a href="/probizz/index.php" target="_blank">Visit Site</a></li>
            </ul>
        </li>
        <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_role'] == 2 || $_SESSION['user_role'] == 3){ ?>
        <li class=""> <!--===== USERS =====-->
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="/probizz/dashboard_assets/img/menu-icon/4.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Users</span>
                </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
              <li><a href="/probizz/users/add_user.php">Add User</a></li>
            <?php } ?>
              <li><a href="/probizz/users/view.php">View User</a></li>
            </ul>
        </li>
        <?php } ?>
        <li class=""> <!--===== NAVBAR =====-->
            <a  class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="/probizz/dashboard_assets/img/menu-icon/General.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>Navbar</span>
              </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
              <li><a href="/probizz/option_top_menu/add_top_menu.php">Add Top Menu</a></li>
              <?php } ?>
              <li><a href="/probizz/option_top_menu/view_top_menu.php">View Top Menu</a></li>
              <?php if($_SESSION['user_role'] == 1){ ?>
              <li><a href="/probizz/option_logo/add_logo.php">Add Logo</a></li>
              <?php } ?>
              <li><a href="/probizz/option_logo/view_logo.php">View Logo</a></li>
              <?php if($_SESSION['user_role'] == 1){ ?>
              <li><a href="/probizz/option_main_menu/add_menu.php">Add Main Menu</a></li>
              <?php } ?>
              <li><a href="/probizz/option_main_menu/view_menu.php">View Main Menu</a></li>
            </ul>
        </li>
        <li class=""> <!--===== SOCIAL ACCOUNTS =====-->
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small my-svg">
                    <i class="fas fa-share-alt"></i>
                </div>
                <div class="nav_title">
                    <span>Social Accounts</span>
                </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
              <li><a href="/probizz/option_social_accounts/add_social_account.php">Add Account</a></li>
              <?php } ?>
              <li><a href="/probizz/option_social_accounts/view_social_account.php">View Accounts</a></li>
            </ul>
        </li>
        <li class=""> <!--===== BANNER =====-->
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="fas fa-images"></i>
                </div>
                <div class="nav_title">
                    <span>Banner</span>
                </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
              <li><a href="/probizz/option_banner/add_banner.php">Add Banner</a></li>
              <?php } ?>
              <li><a href="/probizz/option_banner/view_banner.php">View Banner</a></li>
            </ul>
        </li>
        <li class=""> <!--===== THREE COL =====-->
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="fas fa-images"></i>
                </div>
                <div class="nav_title">
                    <span>Three Column Seciton</span>
                </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
              <li><a href="/probizz/option_three_col/add_three_col.php">Add Three Column Content</a></li>
              <?php } ?>
              <li><a href="/probizz/option_three_col/view_three_col.php">View Three Column Content</a></li>
            </ul>
        </li>
        <li class=""> <!--===== ABOUT =====-->
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="fas fa-address-card"></i>
                </div>
                <div class="nav_title">
                    <span>About</span>
                </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
              <li><a href="/probizz/option_about/add_about.php">Add About</a></li>
              <?php } ?>
              <li><a href="/probizz/option_about/view_about.php">View About</a></li>
            </ul>
        </li>
        <li class=""> <!--===== SERVICES =====-->
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <i class="fas fa-cogs"></i>
            </div>
            <div class="nav_title">
                <span>Services</span>
            </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_services/header/add_header.php">Add Header Content</a></li>
                <?php } ?>
                <li><a href="/probizz/option_services/header/view_header.php">View Header Content</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_services/add_services.php">Add Services</a></li>
                <?php } ?>
                <li><a href="/probizz/option_services/view_services.php">View Services</a></li>
            </ul>
        </li>
        <li class=""> <!--===== PORTFOLIO =====-->
            <a  class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <i class="fas fa-layer-group"></i>
              </div>
              <div class="nav_title">
                  <span>Portfolio</span>
              </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_portfolio/header/add_header.php">Add Header Content</a></li>
                <?php } ?>
                <li><a href="/probizz/option_portfolio/header/view_header.php">View Header Content</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_portfolio/add_portfolio_tabs.php">Add Portfolio Tabs</a></li>
                <?php } ?>
                <li><a href="/probizz/option_portfolio/view_portfolio_tabs.php">View Portfolio Tabs</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_portfolio/add_portfolio_image.php">Add Portfolio Image</a></li>
                <?php } ?>
                <li><a href="/probizz/option_portfolio/view_portfolio_image.php">View Portfolio Image</a></li>
            </ul>
        </li>
        <li class=""> <!--===== BANNER CONTACT =====-->
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="/probizz/dashboard_assets/img/menu-icon/Mail_Box.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Banner Contact</span>
                </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_contact_banner/add_contact_banner.php">Add Contact Banner</a></li>
                <?php } ?>
                <li><a href="/probizz/option_contact_banner/view_contact_banner.php">View Contact Banner</a></li>
            </ul>
        </li>
        <li class=""> <!--===== FEATURES =====-->
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="/probizz/dashboard_assets/img/menu-icon/icon.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>Features</span>
              </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_feature/header/add_header.php">Add Header Content</a></li>
                <?php } ?>
                <li><a href="/probizz/option_feature/header/view_header.php">View Header Content</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_feature/add_feature.php">Add Feature Left</a></li>
                <?php } ?>
                <li><a href="/probizz/option_feature/view_feature.php">View Feature Left</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_feature/add_feature_right.php">Add Feature Right</a></li>
                <?php } ?>
                <li><a href="/probizz/option_feature/view_feature_right.php">View Feature Right</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_feature/add_feature_image.php">Add Feature Image</a></li>
                <?php } ?>
                <li><a href="/probizz/option_feature/view_feature_image.php">View Feature Image</a></li>
            </ul>
        </li>
        <li class=""> <!--===== SUBSCRIBE =====-->
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <i class="fas fa-bell"></i>
              </div>
              <div class="nav_title">
                  <span>Subscribe</span>
              </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_subscribe/header/add_header.php">Add Header Content</a></li>
                <?php } ?>
                <li><a href="/probizz/option_subscribe/header/view_header.php">View Header Content</a></li>
                <li><a href="/probizz/option_subscribe/view_subscribe.php">View Subscribed Mails</a></li>
            </ul>
        </li>
          <li class=""> <!--===== PRICING =====-->
            <a  class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <div class="nav_title">
                  <span>Pricing</span>
              </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_pricing/header/add_header.php">Add Header Content</a></li>
                <?php } ?>
                <li><a href="/probizz/option_pricing/header/view_header.php">View Header Content</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_pricing/add_pricing_items.php">Add Packages</a></li>
                <?php } ?>
                <li><a href="/probizz/option_pricing/view_pricing_items.php">View Packages</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_pricing/add_pricing_lists.php">Add List</a></li>
                <?php } ?>
                <li><a href="/probizz/option_pricing/view_pricing_lists.php">View List</a></li>
            </ul>
          </li>
          <li class=""> <!--===== COUNTER =====-->
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <i class="fas fa-poll"></i>
              </div>
              <div class="nav_title">
                  <span>Counter/Project Stats</span>
              </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_counter/add_counter.php">Add Counter</a></li>
                <?php } ?>
                <li><a href="/probizz/option_counter/view_counter.php">View Counter</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_counter/add_counter_image.php">Add Section Image</a></li>
                <?php } ?>
                <li><a href="/probizz/option_counter/view_counter_image.php">View Section Image</a></li>
            </ul>
          </li>
          <li class=""> <!--===== TEAM =====-->
            <a   class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="fas fa-users"></i>
                </div>
                <div class="nav_title">
                    <span>Team</span>
                </div>
            </a>
            <ul>
            <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_team/header/add_header.php">Add Header Content</a></li>
                <?php } ?>
                <li><a href="/probizz/option_team/header/view_header.php">View Header Content</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_team/add_team_member.php">Add Team Member</a></li>
                <?php } ?>
                <li><a href="/probizz/option_team/view_team_member.php">View All Team Member</a></li>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <li><a href="/probizz/option_team/add_team_accounts.php">Add Social Accounts</a></li>
                <?php } ?>
                <li><a href="/probizz/option_team/view_team_accounts.php">View Social Accounts</a></li>
            </ul>
          </li>
        <li class=""> <!--===== TESTIMONIAL =====-->
          <a   class="has-arrow" href="#" aria-expanded="false">
            <div class="nav_icon_small">
                <i class="fas fa-star"></i>
            </div>
            <div class="nav_title">
                <span>Testimonial</span>
            </div>
          </a>
          <ul>
          <?php if($_SESSION['user_role'] == 1){ ?>
            <li><a href="/probizz/option_testimonial/header/add_header.php">Add Header Content</a></li>
            <?php } ?>
            <li><a href="/probizz/option_testimonial/header/view_header.php">View Header Content</a></li>
            <?php if($_SESSION['user_role'] == 1){ ?>
            <li><a href="/probizz/option_testimonial/add_testimonial.php">Add Testimonial</a></li>
            <?php } ?>
            <li><a href="/probizz/option_testimonial/view_testimonial.php">View Testimonial</a></li>
          </ul>
        </li>
        <li class=""> <!--===== LATEST BLOG =====-->
          <a   class="has-arrow" href="#" aria-expanded="false">
            <div class="nav_icon_small">
                <i class="fas fa-blog"></i>
            </div>
            <div class="nav_title">
                <span>Latest Blog</span>
            </div>
          </a>
          <ul>
          <?php if($_SESSION['user_role'] == 1){ ?>
            <li><a href="/probizz/option_latest_blog/header/add_header.php">Add Header Content</a></li>
            <?php } ?>
            <li><a href="/probizz/option_latest_blog/header/view_header.php">View Header Content</a></li>
            <?php if($_SESSION['user_role'] == 1){ ?>
            <li><a href="/probizz/option_latest_blog/add_latest_blog.php">Add Latest Blog</a></li>
            <?php } ?>
            <li><a href="/probizz/option_latest_blog/view_latest_blog.php">View Latest Blog</a></li>
          </ul>
        </li>
        <li class=""> <!--===== CONTACT =====-->
          <a   class="has-arrow" href="#" aria-expanded="false">
            <div class="nav_icon_small">
                <i class="fas fa-address-book"></i>
            </div>
            <div class="nav_title">
                <span>Contact</span>
            </div>
          </a>
          <ul>
          <?php if($_SESSION['user_role'] == 1){ ?>
            <li><a href="/probizz/option_contact/header/add_header.php">Add Header Content</a></li>
            <?php } ?>
            <li><a href="/probizz/option_contact/header/view_header.php">View Header Content</a></li>
            <li><a href="/probizz/option_contact/form/view_contact_form.php">View Clients Query</a></li>
            <?php if($_SESSION['user_role'] == 1){ ?>
            <li><a href="/probizz/option_contact/add_contact.php">Add Contact</a></li>
            <?php } ?>
            <li><a href="/probizz/option_contact/view_contact.php">View Contact</a></li>
          </ul>
        </li>
        <li class=""> <!--===== FOOTER =====-->
          <a   class="has-arrow" href="#" aria-expanded="false">
            <div class="nav_icon_small">
                <i class="fas fa-copyright"></i>
            </div>
            <div class="nav_title">
                <span>Footer</span>
            </div>
          </a>
          <ul>
          <?php if($_SESSION['user_role'] == 1){ ?>
            <li><a href="/probizz/option_footer_credit/add_footer_credit.php">Add Footer Credit</a></li>
            <?php } ?>
            <li><a href="/probizz/option_footer_credit/view_footer_credit.php">View Footer Credit</a></li>
            <?php if($_SESSION['user_role'] == 1){ ?>
            <li><a href="/probizz/option_important_links/add_important_links.php">Add Important Links</a></li>
            <?php } ?>
            <li><a href="/probizz/option_important_links/view_important_links.php">View Important Links</a></li>
          </ul>
        </li>
    </ul>
</nav>
 <!-- ============================================== 
                    End Sidebar
 =============================================== -->

 <section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="/probizz/dashboard_assets/img/line_img.png" alt="">
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        
                        <div class="profile_info d-flex align-items-center">
                            <div class="profile_thumb mr_20">
                                <img src="/probizz/users/uploaded/<?= $_SESSION['user_profile']; ?>" alt="#" width="50" height="50">
                            </div>
                            <div class="author_name">
                                <h4 class="f_s_15 f_w_500 mb-0"><?= $_SESSION['username'] ?></h4>
                                <p class="f_s_12 f_w_400">
                                    <?php
                                        if($_SESSION['user_role'] == 0){
                                            echo "Member";
                                        }elseif($_SESSION['user_role'] == 1){
                                            echo "Admin";
                                        }elseif($_SESSION['user_role'] == 2){
                                            echo "Moderator";
                                        }elseif($_SESSION['user_role'] == 3){
                                            echo "Editor";
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <h6 style="color: #fff; font-family: 'Montserrat', sans-serif;"><?= $_SESSION['username'] ?></h6>
                                </div>
                                <div class="profile_info_details">
                                    <a href="/probizz/users/user_profile.php?id=<?= $_SESSION['user_id']; ?>">My Profile </a>
                                    <a href="/probizz/users/user_edit.php">Edit Profile</a>
                                    <a href="/probizz/login/logout.php">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="mb-0" >Dashboard</h3>
                            <p>Dashboard/ProBizz</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-12">