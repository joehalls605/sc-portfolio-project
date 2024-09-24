<div class="main-content">
<div class="about-section">
<?php
/*
Template Name: Contact Page
*/
get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content(); // This function pulls in Gutenberg content.
    endwhile;
endif;
?>

<?php get_footer(); ?>
</div>
</div>
