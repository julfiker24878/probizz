<?php
require 'db.php';

//LOGO
$select_logo = "SELECT * FROM logo";
$select_logo_result = mysqli_query($db_connect, $select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_logo_result);

//SOCIAL ACCOUNTS
$select_social_account = "SELECT * FROM social_accounts WHERE status=1";
$select_social_account_query = mysqli_query($db_connect, $select_social_account);

//TOP MENU
$select_top_menu = "SELECT * FROM top_menu";
$top_menu_query = mysqli_query($db_connect, $select_top_menu);
$top_menu_assoc = mysqli_fetch_assoc($top_menu_query);

//MAIN MENU
$select_menu = "SELECT * FROM menu";
$select_menu_result = mysqli_query($db_connect, $select_menu);

//BANNER
$select_banner = "SELECT * FROM banner";
$select_banner_result = mysqli_query($db_connect, $select_banner);
$after_assoc_banner = mysqli_fetch_assoc($select_banner_result);

//3 FEATURE
$select_three_col = "SELECT * FROM three_col WHERE status=1";
$select_three_col_result = mysqli_query($db_connect, $select_three_col);

//ABOUT
$select_about = "SELECT * FROM about";
$select_about_result = mysqli_query($db_connect, $select_about);
$about_assoc = mysqli_fetch_assoc($select_about_result);

//SERVICES
$select_services = "SELECT * FROM services ORDER BY id DESC LIMIT 6";
$select_services_result = mysqli_query($db_connect, $select_services);

//PORTFOLIO TABS
$select_portfolio_tabs = "SELECT * FROM portfolio_tabs";
$portfolio_tabs_query = mysqli_query($db_connect, $select_portfolio_tabs);

//PORTFOLIO IMAGE
$select_portfolio_image = "SELECT * FROM portfolio_image";
$portfolio_image_query = mysqli_query($db_connect, $select_portfolio_image);

//CONTACT BANNER
$select_contact_banner = "SELECT * FROM contact_banner";
$select_contact_banner_result = mysqli_query($db_connect, $select_contact_banner);
$contact_banner_assoc = mysqli_fetch_assoc($select_contact_banner_result);

//FEATURE
$select_feature = "SELECT * FROM feature";
$select_feature_result = mysqli_query($db_connect, $select_feature);

//FEATURE IMAGE
$select_feature_image = "SELECT * FROM feature_image";
$feature_image_query = mysqli_query($db_connect, $select_feature_image);
$feature_image_assoc = mysqli_fetch_assoc($feature_image_query);

//FEATURE RIGHT
$select_feature_right = "SELECT * FROM feature_right";
$select_feature_right_result = mysqli_query($db_connect, $select_feature_right);

// PACKAGE ITEMS
$select_package_items = "SELECT * FROM pricing_items";
$package_items_query = mysqli_query($db_connect, $select_package_items);

//COUNTER TEXT
$select_counter_text = "SELECT * FROM counter_text";
$counter_text_query = mysqli_query($db_connect, $select_counter_text);

//COUNTER IMAGE
$select_counter_image = "SELECT * FROM counter_image";
$counter_image_query = mysqli_query($db_connect, $select_counter_image);
$counter_image_assoc = mysqli_fetch_assoc($counter_image_query);

//TEAM MEMBER
$select_team_member = "SELECT * FROM team_member WHERE status=1";
$team_member_query = mysqli_query($db_connect, $select_team_member);

//TESTIMONIAL
$select_testimonial = "SELECT * FROM testimonial";
$testimonial_query = mysqli_query($db_connect, $select_testimonial);

//LATEST BLOG
$select_latest_blog = "SELECT * FROM latest_blog ORDER BY id DESC LIMIT 4";
$latest_blog_query = mysqli_query($db_connect, $select_latest_blog);

//CONTACT US CONTENT
$select_contact = "SELECT * FROM contact";
$select_contact_result = mysqli_query($db_connect, $select_contact);

//IMORTANT LINKS
$select_important_links = "SELECT * FROM important_links";
$important_links_query = mysqli_query($db_connect, $select_important_links);

//FOOTER CREDIT
$select_footer_credit = "SELECT * FROM footer_credit";
$footer_credit_query = mysqli_query($db_connect, $select_footer_credit);
$footer_credit_assoc = mysqli_fetch_assoc($footer_credit_query);

//SERVICES HEADER
$select_services_header = "SELECT * FROM services_header";
$select_services_header_result = mysqli_query($db_connect, $select_services_header);
$services_header_assoc = mysqli_fetch_assoc($select_services_header_result);

//PORFOLIO HEADER
$select_porfolio_header = "SELECT * FROM portfolio_header";
$select_porfolio_header_result = mysqli_query($db_connect, $select_porfolio_header);
$porfolio_header_assoc = mysqli_fetch_assoc($select_porfolio_header_result);

//FEATURES HEADER
$select_feature_header = "SELECT * FROM feature_header";
$select_feature_header_result = mysqli_query($db_connect, $select_feature_header);
$feature_header_assoc = mysqli_fetch_assoc($select_feature_header_result);

//SUBSCRIBE HEADER
$select_subscribe_header = "SELECT * FROM subscribe_header";
$select_subscribe_header_result = mysqli_query($db_connect, $select_subscribe_header);
$subscribe_header_assoc = mysqli_fetch_assoc($select_subscribe_header_result);

//PRICING HEADER
$select_pricing_header = "SELECT * FROM pricing_header";
$select_pricing_header_result = mysqli_query($db_connect, $select_pricing_header);
$pricing_header_assoc = mysqli_fetch_assoc($select_pricing_header_result);

//TEAM HEADER
$select_team_header = "SELECT * FROM team_header";
$select_team_header_result = mysqli_query($db_connect, $select_team_header);
$team_header_assoc = mysqli_fetch_assoc($select_team_header_result);

//TEAM HEADER
$select_testimonial_header = "SELECT * FROM testimonial_header";
$select_testimonial_header_result = mysqli_query($db_connect, $select_testimonial_header);
$testimonial_header_assoc = mysqli_fetch_assoc($select_testimonial_header_result);

//LATEST BLOG HEADER
$select_latest_blog_header = "SELECT * FROM latest_blog_header";
$select_latest_blog_header_result = mysqli_query($db_connect, $select_latest_blog_header);
$latest_blog_header_assoc = mysqli_fetch_assoc($select_latest_blog_header_result);

//CONTACT HEADER
$select_contact_header = "SELECT * FROM contact_header";
$select_contact_header_result = mysqli_query($db_connect, $select_contact_header);
$contact_header_assoc = mysqli_fetch_assoc($select_contact_header_result);

