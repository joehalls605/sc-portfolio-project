<?php get_header(); ?>
<main class="main-content">
    <?php
    // Check if this is the front page and a static homepage is set
    if( is_front_page() && is_page()){
        // Display the Gutenberg content
        while( have_posts()): the_post();
            the_content();
        endwhile;

        get_template_part("templates/home");

        get_template_part("templates/parts/product-highlights");
        get_template_part("templates/parts/certified-experience");
        get_template_part("templates/parts/cta-section");
    }
    else{
        get_template_part("templates/home");
        get_template_part("templates/parts/product-highlights");
        get_template_part("templates/parts/certified-experience");
        get_template_part("templates/parts/cta-section");
    }
    ?>

</main>
<?php get_footer(); ?>