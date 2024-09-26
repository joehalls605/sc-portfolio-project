<?php get_header(); ?>
<div class="main-content">
<div class="about-section">
<div id="contact-container">
<?php
/*
Template Name: Contact Page
*/?>
<h2>Contact Form</h2>
<p>Please share some details about your project, your goals, and availability to speak.</p>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content(); // This function pulls in Gutenberg content.
    endwhile;
endif;
?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/computer.gif" alt="LinkedIn">

</div>
</div>
</div>
<?php get_footer(); ?>
