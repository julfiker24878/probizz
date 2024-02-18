<?php
session_start();
 require 'db_tables.php'; ?>

<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from codeglamour.com/html/18/probizz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 04:38:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>ProBizz - Multipurpose Business Landing Page</title>
    <!--Favicon-->
    <link rel="icon" href="/probizz/option_logo/uploaded/<?= $after_assoc_logo['logo_image']; ?>" type="image/png">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!--Slick CSS-->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!--Font Awesome CSS-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Responsive CSS-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>

    <div id="preloader">
        <div class="spinner">
           <div class="rect1"></div>
           <div class="rect2"></div>
           <div class="rect3"></div>
           <div class="rect4"></div>
           <div class="rect5"></div>
        </div>
    </div>

    <!--Start Body Wrap-->
    <div id="body-wrapper">
        <!--Start Header-->
        <header id="header">
            <!--Start Header Top-->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-9 col-md-7">
                            <div class="header-contact-info">
                                <ul>
                                    <li><i class="fas fa-mobile-alt"></i> <?= $top_menu_assoc['number']; ?></li>
                                    <li><i class="far fa-envelope"></i> <?= $top_menu_assoc['email']; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5">
                            <div class="header-social text-right">
                                <ul>
                                    <li><a href="#"><span>Follow Us : </span></a></li>
                                    <?php foreach($select_social_account_query as $social_account){ ?>
                                        <li><a href="#"><i class="<?= $social_account['icon']; ?>"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Top-->

            <!--Start Main Menu-->
            <div class="main_navbar">   
            <!-- MAIN NAVBAR --> 
                <nav class="navbar navbar-expand-lg  navbar-dark">
                    <div class="container">
                        <a class="navbar-brand logo-sticky font-600" href="index.html"><img src="/probizz/option_logo/uploaded/<?= $after_assoc_logo['logo_image']; ?>" alt="" width="70">
                        <?php 
                            $rowcount = mysqli_num_rows($select_logo_result);
                            if($rowcount == 0){
                                echo "Logo";
                            }else{
                                echo $after_assoc_logo['logo_text'];
                            }
                        ?>
                        </a>
                        <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <?php foreach($select_menu_result as $menu_item){ ?>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="<?= $menu_item['link']; ?>"><?= $menu_item['name']; ?></a>
                                </li>
                                <?php } ?>    
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--End Main Menu-->

        </header>
        <!--End Header-->

        <!--Start Banner Section-->
        <section id="main-banner" class="bg-cover position-relative full-height text-center" style="background-image: url(/probizz/option_banner/uploaded/<?= $after_assoc_banner['banner_image']; ?>);">
            <div class="overlay"></div>
            <div class="caption-content dp-table">
                <div class="tbl-cell position-relative">
                    <h1 class="color-white"><?= $after_assoc_banner['heading']; ?></h1>
                    <p class="color-white mt-3"><?= $after_assoc_banner['description']; ?></p>
                    <div class="large-btn animated slideInUp">
                        <a class="btn btn-light mt-5 mr-4" href="<?= $after_assoc_banner['btn1_link']; ?>"><?= $after_assoc_banner['btn1_text']; ?></a><a class="btn btn-primary mt-5" href="<?= $after_assoc_banner['btn2_link']; ?>"><?= $after_assoc_banner['btn2_text']; ?></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section-->

         <!--Start Features Section-->
        <section id="features">
            <!--Start Container-->
            <div class="container">
                <!--Start Features Row-->
                <div class="row">
                    <!--Start Feature Single-->
                    <?php foreach($select_three_col_result as $three_col){ ?>
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="feature-single text-center">
                            <i class="<?= $three_col['icon']; ?>" style="font-size: 70px; color:#A3D4FF; margin-bottom: 25px;"></i>
                            <h4><span class="p-color1"><?= $three_col['title_red']; ?></span>  <?= $three_col['title_blue']; ?></h4>
                            <p><?= $three_col['des']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <!--End Feature Single-->
                </div>
                <!--End Features Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Features Section-->

        <!--Start About Section-->
        <section id="about"  class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start About Image-->
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="/probizz/option_about/uploaded/<?= $about_assoc['about_image']; ?>" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <!--End About Image-->

                    <!--Start About Content-->
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h4 class="color-gray"><?= $about_assoc['sub_title']; ?></h4>
                            <h2><?= $about_assoc['title_red']; ?> <span class="p-color"><?= $about_assoc['title_blue']; ?></span></h2>
                            <p><?= $about_assoc['des']; ?></p>
                        </div>
                    </div>
                    <!--End About Content-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End About Section-->

        <!--Start Services Section-->
        <section id="services">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray"><?= $services_header_assoc['sub_title']; ?></h4>
                            <h2><?= $services_header_assoc['title_red']; ?> <span class="p-color"><?= $services_header_assoc['title_blue']; ?></span></h2>
                            <p><?= $services_header_assoc['des']; ?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Services Row-->
                <div class="row">
                    <!--Start Service Single-->
                    <?php

                    //Services 6
                    
                    foreach($select_services_result as $servic){ ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-single text-center">
                            <i class="<?= $servic['icon']; ?>" style="font-size: 70px; color:#A3D4FF; margin-bottom: 25px;"></i>
                            <h4 class="p-color1"><?= $servic['title']; ?></h4>
                            <p><?= $servic['des']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <!--End Service Single-->
                </div>
                <!--End Services Row-->


            </div>
            <!--End Container-->
        </section>
        <!--End Services Section-->

            <!-- Portfolio Section -->
        <section id="portfolios" class="bg-gray default-padding">
          <!-- Container Starts -->
          <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray"><?= $porfolio_header_assoc['sub_title']; ?></h4>
                            <h2><?= $porfolio_header_assoc['title_red']; ?> <span class="p-color"><?= $porfolio_header_assoc['title_blue']; ?></span></h2>
                            <p><?= $porfolio_header_assoc['des']; ?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <div class="row">          
                  <div class="col-lg-12">
                    <!-- Portfolio Controller/Buttons -->
                    <div class="controls text-center">
                      <a class="control btn btn-outline-primary" data-filter="all" style="text-transform: capitalize;">
                        all 
                      </a>
                      <?php foreach($portfolio_tabs_query as $tab){ ?>
                      <a class="control btn btn-outline-primary" data-filter=".<?= $tab['title']; ?>" style="text-transform: capitalize;">
                        <?= $tab['title']; ?> 
                      </a>
                      <?php } ?>
                    </div>
                    <!-- Portfolio Controller/Buttons Ends-->          

                    <!-- Portfolio Recent Projects -->
                    <div id="portfolio" class="row wow fadeInUp" data-wow-delay="0.8s">

                    <?php foreach($portfolio_image_query as $image){ ?>
                      <div class="col-md-6 col-lg-4 col-lg-4 col-xl-4 mix <?= $image['all_selected']; ?>">
                        <div class="portfolio-item">
                          <div class="shot-item">
                            <a class="overlay lightbox" href="/probizz/option_portfolio/uploaded/<?= $image['image']; ?>">
                              <img src="/probizz/option_portfolio/uploaded/<?= $image['image']; ?>" alt="" />  
                              <i class="fa fa-eye item-icon"></i>
                            </a>
                          </div>               
                        </div>
                      </div>
                    <?php } ?>
                      
                    </div>
                  </div>
                </div>
          </div>
          <!-- Container Ends -->
        </section>
        <!-- Portfolio Section Ends --> 

        <!--Start Call To Action-->
        <section id="contact-now" class="bg-cover position-relative" style="background: url(/probizz/option_contact_banner/uploaded/<?= $contact_banner_assoc['contact_banner_image']; ?>) fixed no-repeat center/cover;">
            <div class="overlay"></div>
            <!--Start Container-->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="contact-now-content">
                            <h2 class="color-white"><?= $contact_banner_assoc['title1']; ?> <br><span class="p-color"> <?= $contact_banner_assoc['title2']; ?></span></h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="contact-now-button">
                            <a href="#contact"><?= $contact_banner_assoc['btn_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Container-->
        </section>
        <!--End Call To Action-->

        <!--Start Why Choose Us-->
        <section id="why-us" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Why Choose Content-->
                    <div class="col-lg-6">
                        <div class="why-us-content">
                            <h4 class="color-gray"><?= $feature_header_assoc['sub_title']; ?></h4>
                            <h2 class="p-color1"><?= $feature_header_assoc['title_red']; ?> <span class="p-color"> <?= $feature_header_assoc['title_red']; ?></span></h2>
                            <p><?= $feature_header_assoc['des']; ?></p>
                            <div class="why-us-features row">
                                <div class="col-md-6">
                                    <ul>
                                        <?php foreach($select_feature_result as $feature){ ?>
                                        <li><i class="fas fa-check"></i> <?= $feature['choose_reason']; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <?php foreach($select_feature_right_result as $feature_right){ ?>
                                        <li><i class="fas fa-check"></i> <?= $feature_right['choose_reason']; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Why Choose Content-->

                    <!--Start Why Choose Image-->
                    <div class="col-lg-6">
                        <div class="why-us-img">
                            <img src="/probizz/option_feature/uploaded/<?= $feature_image_assoc['image']; ?>" class="img-fluid" alt="Image"> 
                        </div>
                    </div>
                    <!--End Why Choose Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Why Choose Us-->

        <!--Start Newsletter Section-->
        <section id="newsletter" class="default-padding">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray"><?= $subscribe_header_assoc['sub_title']; ?></h4>
                            <h2 class="p-color1"><?= $subscribe_header_assoc['title_red']; ?> <span class="p-color"><?= $subscribe_header_assoc['title_blue']; ?></span></h2>
                            <p><?= $subscribe_header_assoc['des']; ?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Newsletter Form-->
                <form action="/probizz/option_subscribe/post_subscribe.php" method="post">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-lg-4 col-md-6">
                            <div class="newsletter-form">
                                <input name="sub" type="email" class="form-control" placeholder="Write Your Email">

                                <!-- EMPTY INPUT -->
                                <?php if(isset($_SESSION['failed'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?= $_SESSION['failed']; ?>
                                    </div>
                                <?php } unset($_SESSION['failed']); ?>

                                <!-- INVALID EMAIL -->
                                <?php if(isset($_SESSION['invalid'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?= $_SESSION['invalid']; ?>
                                    </div>
                                <?php } unset($_SESSION['invalid']); ?>

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="newsletter-btn">
                                <button type="submit">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--End Newsletter Form-->
            </div>
            <!--End Container-->
        </section>
        <!--End Newsletter Section-->

        <!--Start Pricing Section-->
        <section id="pricing" class="bg-gray default-padding">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray"><?= $pricing_header_assoc['sub_title']; ?></h4>
                            <h2 class="p-color1"><?= $pricing_header_assoc['title_red']; ?><span class="p-color"> <?= $pricing_header_assoc['title_blue']; ?> </span></h2>
                            <p><?= $pricing_header_assoc['des']; ?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Pricing Table Row-->
                <div class="row">

                <?php foreach($package_items_query as $package){ ?>

                    <?php
                        $id = $package['id'];
                        $select_pricing_lists = "SELECT * FROM pricing_lists WHERE package_id = $id";
                        $pricing_lists_query = mysqli_query($db_connect, $select_pricing_lists);
                    ?>
                    <!--Start Pricing Table Single-->
                    <div class="col-md-4">
                        <div class="pricing-table-single fix text-center">
                            <div class="table-title">
                                <h2 class="p-color"><?= $package['package_name']; ?></h2>
                            </div>
                            <div class="price-amount">
                                <h2 class="color-white">$ <?= $package['price']; ?></h2>
                            </div>
                            <div class="table-details">
                                <ul>
                                    <?php foreach($pricing_lists_query as $list){ ?>
                                    <li><?= $list['list']; ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="table-btn">
                                <a href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table Single-->
                <?php } ?>
                    
                </div>
                <!--End Pricing Table Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Pricing Section-->

        <!--Start Counter Section-->
        <section id="counter" class="bg-cover position-relative" style="background: url(/probizz/option_counter/uploaded/<?= $counter_image_assoc['image']; ?>) fixed no-repeat top/cover">
            <div class="overlay"></div>
            <!--Start Container-->
            <div class="container">
                <!--Start Counter Row-->
                <div class="row">

                <?php foreach($counter_text_query as $counter_text){ ?>
                    <!--Start Counter Single-->
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-single text-center">
                            <i class="<?= $counter_text['icon']; ?>"></i>
                            <h2 class="color-white"><?= $counter_text['num']; ?></h2>
                            <h6 class=""><?= $counter_text['text']; ?></h6>
                        </div>
                    </div>
                    <!--End Counter Single-->
                <?php } ?>

                </div>
                <!--End Counter Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Counter Section-->

        <!--Start Team Section-->
        <section id="team" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray"><?= $team_header_assoc['sub_title']; ?></h4>
                            <h2 class="p-color1"><?= $team_header_assoc['title_red']; ?> <span class="p-color"><?= $team_header_assoc['title_blue']; ?></span></h2>
                            <p><?= $team_header_assoc['des']; ?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Team Members Row-->
                <div class="row">

                <?php foreach($team_member_query as $team_member){ ?>
                    <!--Start Team Member Single-->
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member-single fix position-relative text-center">
                            <img src="/probizz/option_team/uploaded/<?= $team_member['profile_image']; ?>" class="img-fluid" alt="Image" style="height: 290px; width: 289px;">
                            <div class="member-social-icons">
                                <?php
                                    $id = $team_member['id'];
                                    $select_team_accounts = "SELECT * FROM team_accounts WHERE member_id=$id";
                                    $team_accounts_query = mysqli_query($db_connect, $select_team_accounts);
                                ?>
                                <ul>
                                    <?php foreach($team_accounts_query as $accounts){ ?>
                                    <li><a href="<?= $accounts['link']; ?>"><i class="<?= $accounts['icon']; ?>"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="member-details position-relative">
                                <h4 class="font-600 color-white"><?= $team_member['first_name']; ?> <?= $team_member['last_name']; ?></h4>
                                <p class="color-white"><?= $team_member['designation']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!--End Team Member Single-->
                <?php } ?>

                </div>
                <!--End Team Members Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Team Section-->

        <!-- testimonial Section Start -->
      <section class="clients_testimonial_area default-padding" id="testimonial">
          <div class="container">
            <!--Start Heading-->
            <div class="row">
                <div class="col-12">
                    <div class="heading text-center">
                        <h4 class="color-gray"><?= $testimonial_header_assoc['sub_title']; ?></h4>
                        <h2 class="p-color1"><?= $testimonial_header_assoc['title_red']; ?> <span class="p-color"><?= $testimonial_header_assoc['title_blue']; ?></span></h2>
                    </div>
                </div>
            </div>
            <!--End Heading-->

            <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                      <div class="slider slider-for">
                        <?php foreach($testimonial_query as $testimonial){ ?>
                          <!-- Client testimonial Text  -->
                          <div class="client-testimonial-text text-center">
                              <div class="client">
                                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                              </div>
                              <div class="client-description text-center">
                                  <p>“ <?= $testimonial['comment']; ?> ”</p>
                              </div>
                              <div class="star-icon text-center">
                                    <?php
										if($testimonial['review'] == 1){
											echo '<i class="fas fa-star"></i>';
										}elseif($testimonial['review'] == 2){
											echo '<i class="fas fa-star"></i><i class="fas fa-star"></i>';
										}elseif($testimonial['review'] == 3){
											echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
										}elseif($testimonial['review'] == 4){
											echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
										}elseif($testimonial['review'] == 5){
											echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
										}else{
											echo "No ratings!";
										}
									?>
                              </div>
                              <div class="client-name text-center">
                                  <h5><?= $testimonial['name']; ?></h5>
                                  <p><?= $testimonial['designation']; ?></p>
                              </div>
                          </div>
                        <?php } ?>
                      </div>
                  </div>
                  <!-- Client Thumbnail Area -->
                  <div class="col-12 col-lg-6">
                      <div class="slider slider-nav">
                        <?php foreach($testimonial_query as $testimonial_profile){ ?>
                          <div class="client-thumbnail">
                              <img src="/probizz/option_testimonial/uploaded/<?= $testimonial_profile['profile_image']; ?>" alt="Image">
                          </div>
                        <?php } ?>
                      </div>
                  </div>
                  
              </div>
          </div>
      </section>
    
    <!-- testimonial Section Start -->

        <!--Start Latest Blog Section-->
        <section id="latest-blog" class="bg-gray default-padding">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class="color-gray"><?= $latest_blog_header_assoc['sub_title']; ?></h4>
                            <h2 class="p-color1"><?= $latest_blog_header_assoc['title_red']; ?> <span class="p-color"><?= $latest_blog_header_assoc['title_blue']; ?></span> </h2>
                            <p><?= $latest_blog_header_assoc['des']; ?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Blog Post Row-->
                <div class="row">

                <?php foreach($latest_blog_query as $latest_blog){ ?>
                    <!--Start Latest Post Single-->
                    <div class="col-lg-6">
                        <div class="blog-post-single latest row fix">
                            <div class="col-md-6 p-0">
                                <div class="post-media position-relative">
                                    <a href="blog-details.html"><img src="/probizz/option_latest_blog/uploaded/<?= $latest_blog['banner_image']; ?>" class="img-fluid" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-details">
                                    <div class="post-title">
                                        <h2><a href="blog-details.html"><?= $latest_blog['heading']; ?></a></h2>
                                    </div>
                                    <div class="post-fact">
                                        <p><a href="#"><i class="icofont icofont-user"></i> Admin</a><a href="#"><i class="icofont icofont-comment"></i> 15 Comments</a><a href="#"><i class="icofont icofont-like"></i> 22 Like</a></p>
                                    </div>
                                    <div class="post-content">
                                        <p><?= substr($latest_blog['description'], 0, 87); ?></p>
                                        <p><span><a class="font-500 p-color" href="blog-details.html"><i class="icofont icofont-arrow-right p-color"></i> Read More</a></span><span class="float-right"><a class="font-500 p-color" href="#"><i class="icofont icofont-user p-color"></i> 26 Mar 2018</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Latest Post Single-->
                    <?php } ?>

                    <!--Start Button-->
                    <div class="col-lg-12">
                        <div class="blog-btn text-center">
                            <a href="blog.html">Browse More</a>
                        </div>
                    </div>
                    <!--End Button-->
                </div>
                <!--End Blog Post Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Latest Blog Section-->

        <!--Start Contact Section-->
        <section id="contact" class="default-padding">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading-->
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h4 class=" color-gray"><?= $contact_header_assoc['sub_title']; ?></h4>
                            <h2 class="p-color1"><?= $contact_header_assoc['title_red']; ?> <span class="p-color"><?= $contact_header_assoc['title_blue']; ?></span></h2>
                            <p><?= $contact_header_assoc['des']; ?></p>
                        </div>
                    </div>
                </div>
                <!--End Heading-->

                <!--Start Contact Row-->
                <div class="row">
                    <!--Start Contact Info-->
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <!--Start Contact Info Single-->
                            <div class="row">
                                
                                <?php foreach($select_contact_result as $contact_content){ ?>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="contact-info-single text-center">
                                        <i class="<?= $contact_content['icon']; ?>"></i>
                                        <p class="font-500"><?= $contact_content['title']; ?></p>
                                    </div>
                                    <!--End Contact Info Single-->
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                    <!--End Contact Info-->

                    <!--Start Contact Form-->
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="/probizz/option_contact/form/post_contact_form.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name*" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email*" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="10" placeholder="Write Your Message" id="message" name="message" required></textarea>
                                </div>
                                <div class="contact-btn text-center">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                            <div id="form-messages"></div>
                        </div>
                    </div>
                    <!--End Contact Form-->
                </div>
                <!--End Contact Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Contact Section-->

        <!--Start Footer-->
        <footer id="footer">
            <!--Start Footer Top-->
            <div class="footer-top">
                <!--Start Container-->
                <div class="container">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Footer About-->
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="footer-about">
                                <h3 class="color-white">About Us</h3>
                                <p><?= substr($about_assoc['des'], 0, 106); ?></p>
                            </div>
                            <div class="footer-newsletter">
                                
                                <h4 class="color-white">Subscribe Now</h4>
                                <!-- EMPTY INPUT -->
                                <?php if(isset($_SESSION['footer_failed'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?= $_SESSION['footer_failed']; ?>
                                    </div>
                                <?php } unset($_SESSION['footer_failed']); ?>

                                <!-- INVALID EMAIL -->
                                <?php if(isset($_SESSION['footer_invalid'])){ ?>
                                    <div class="alert alert-warning mt-2">
                                        <?= $_SESSION['footer_invalid']; ?>
                                    </div>
                                <?php } unset($_SESSION['footer_invalid']); ?>
                                
                                <form action="/probizz/option_subscribe/post_footer_subscribe.php" method="post">
                                  <input type="email" name="sub"><input type="submit" value="Subscribe">
                                </form>
                            </div>
                        </div>
                        <!--End Footer About-->

                        <!--Start Footer Links-->
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="footer-links">
                                <h3 class="color-white">Important Links</h3>
                                <ul>
                                    <?php foreach($important_links_query as $important_links){ ?>
                                        <li><a href="<?= $important_links['link']; ?>"><i class="fas fa-angle-right"></i> <?= $important_links['title']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Links-->

                        <!--Start Footer Latest News-->
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="footer-latest-news">
                                <h3 class="color-white">Latest News</h3>

                                <?php foreach($latest_blog_query as $sl => $latest_blogs){ ?>
                                <!--Start Recent Post Single-->
                                <div class="recent-post-single fix">
                                    <div class="post-img float-left">
                                        <a href="#"><img src="/probizz/option_latest_blog/uploaded/<?= $latest_blogs['banner_image']; ?>" class="img-fluid" alt="Image"></a>
                                    </div>
                                    <div class="post-cont float-right">
                                        <h5><a class="color-white" href="#"><?= $latest_blogs['heading']; ?></a></h5>
                                        <p><span><?= $latest_blogs['created_at']; ?></span></p>
                                    </div>
                                </div>
                                <!--End Recent Post Single-->
                                <?php } ?>

                            </div>
                        </div>
                        <!--End Footer Latest News-->

                        <!--Start Footer Instagram-->
                        <div class="col-lg-3 col-md-6 mb-3">
                           <div class="footer-social-area">
                                <h3 class="color-white">Follow Us</h3>
                                <p class="mb-3">We are happy to see you here.</p>
                                <ul>
                                    <?php foreach($select_social_account_query as $social_account){ ?>
                                        <li><a href="#"><i class="<?= $social_account['icon']; ?>"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Instagram-->

                    </div>
                    <!--End Row-->
                </div>
                <!--End Container-->
            </div>
            <!--End Footer Top-->

            <!--Start Footer Bottom-->
            <div class="footer-bottom">
                <p class="color-white text-center"> &copy; <?= $footer_credit_assoc['credit']; ?> <a class="p-color" href="<?= $footer_credit_assoc['link']; ?>"><?= $footer_credit_assoc['link_text']; ?></a></p>
            </div>
            <!--End Footer Bottom-->

            <!--Start Click To Top-->
            <div class="click-to-top">
                <a href="#body-wrapper" class="js-scroll-trigger"><i class="fas fa-angle-double-up"></i></a>
            </div>
            <!--End Click To Top-->
        </footer>
        <!--End Footer-->
    </div>
    <!--End Body Wrap-->

    <!--jQuery JS-->
    <script src="js/jquery-min.js"></script>
    <!--Custom Google Map JS-->
    <script src="js/map-scripts.js"></script>
    <!--Slick Js-->
    <script src="js/slick.min.js"></script>
    <!--Counter JS-->
    <script src="js/waypoints.js"></script>
    <script src="js/counterup.min.js"></script>
    <!--Bootstrap JS-->
    <script src="js/bootstrap.min.js"></script>
    <!--Magnic PopUp JS-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <!--Owl Carousel JS-->
    <script src="js/owl.carousel.min.js"></script>
    <!--Jquery Easing Js -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <!--Scrolly JS-->
    <script src="js/scrolly.js"></script>
    <!--Ajax Contact JS-->
    <script src="js/ajax-contact-form.js"></script>
    <!--Sweet Alert JS-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Main JS-->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from codeglamour.com/html/18/probizz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 04:40:42 GMT -->
</html>

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