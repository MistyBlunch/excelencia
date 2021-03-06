<?php

//Template Name: Pagina Clientes

get_header();

?>
<main id="main" class="site-main" role="main">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php echo the_breadcrumbs(); ?>
            </ol>
        </nav>
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'page' );
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile; // End of the loop.
        ?>

        <?php
        getRecommend('Lo que dicen sobre nosotros', 6);
        ?>


    </div>
</main>

<?php get_footer(); ?>
