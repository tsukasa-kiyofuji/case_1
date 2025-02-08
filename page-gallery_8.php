<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_8') ;?></h2>
    		<p><?php the_field('detail_8_1') ;?></p>

          <?php $content_img_8_1 = get_field('content_img_8_1'); if ($content_img_8_1): ?>
            <img src="<?php echo esc_url($content_img_8_1['url']); ?>" alt="<?php echo esc_attr($content_img_8_1['alt']); ?>" class="dog_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/dog_1.jpg" class="dog_img">
          <?php endif; ?>

    	</content>
    </section>

<?php get_footer(); ?>