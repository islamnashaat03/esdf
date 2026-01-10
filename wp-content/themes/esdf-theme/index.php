<?php get_header(); ?>

<main id="main-content">
    <div class="container">
        <h1>Welcome to ESDF</h1>
        <p>This is the start of your custom theme.</p>
        
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_title('<h2>', '</h2>');
                the_content();
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
