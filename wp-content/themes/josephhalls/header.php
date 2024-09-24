<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php blogInfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri();?>/assets/js/scripts.js"></script>
<body <?php body_class();?>>
<header class="site-header">
    <div class="container">
        <div class="container">
            <div id="headerTitle">
                <a href="<?php echo home_url();?>">
                <h1 class="site-title">Joseph Halls</h1>
                </a>
            </div>
            <nav class="site-navigation">
                <?php wp_nav_menu(array("theme_location" => "primary")); ?>
            </nav>
    </div>
</header>