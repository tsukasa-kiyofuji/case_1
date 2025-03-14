<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
        <content class="page_container <?php echo 'post-' . get_the_ID(); ?>">
            <h2><?php the_title(); ?></h2>
            <div class="gallery_content">
                <?php the_content(); ?>
            </div>
        </content>
    </section>
</main>

<?php get_footer(); ?>