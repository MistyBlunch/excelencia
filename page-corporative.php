<?php

//Template Name: Pagina Corporative

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
        $pageId = get_the_ID();
        $imageOne = get_post_meta($pageId,'section_one_background', true);
        $urlImageOne = wp_get_attachment_image_src( $imageOne, 'full' );
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'page' );
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile; // End of the loop.
        ?>

        <section id="methodology" class="section-card" style="background-image: url('<?php echo $urlImageOne[0]; ?>')">
            <div class="section-container">
                <h2 class="section-title">
                    <?php echo get_post_meta($pageId,'section_one_title', true); ?>
                </h2>
                <?php echo get_post_meta($pageId,'section_one_text', true); ?>
            </div>
        </section>



    </div>
</main>

<?php get_footer(); ?>
