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
        $imageTwo = get_post_meta($pageId,'section_two_background', true);
        $urlImageTwo = wp_get_attachment_image_src( $imageTwo, 'full' );
        $imageThree = get_post_meta($pageId,'section_three_background', true);
        $urlImageThree = wp_get_attachment_image_src( $imageThree, 'full' );
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
                <div class="container">
                    <?php echo get_post_meta($pageId,'section_one_text', true); ?>
                </div>
            </div>
        </section>

        <section id="benefits" class="section-card" style="background-image: url('<?php echo $urlImageTwo[0]; ?>')">
            <div class="section-container">
                <h2 class="section-title">
                    <?php echo get_post_meta($pageId,'section_two_title', true); ?>
                </h2>
                <div class="container">
                    <?php echo get_post_meta($pageId,'section_two_text', true); ?>
                </div>
            </div>
        </section>

        <section id="contact-corporate" >
            <h2 class="section-title-contact">
                <?php echo get_post_meta($pageId,'section_three_title', true); ?>
            </h2>
            <div class="section-card section-card-contact" style="background-image: url('<?php echo $urlImageThree[0]; ?>')">
                <div class="section-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">

                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card card-form">
                                    <div class="card-body">
                                        <?php echo do_shortcode(get_post_meta($pageId,'section_three_text', true)); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-footer">
                        <?php echo get_post_meta($pageId,'section_footer_contact', true); ?>
                    </div>
                </div>
            </div>
        </section>


    </div>
</main>

<?php get_footer(); ?>
