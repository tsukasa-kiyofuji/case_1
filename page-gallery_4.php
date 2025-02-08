<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_4') ;?></h2>
    		<p class="margin_bottom_10px"><?php the_field('detail_4_1') ;?></p>
    		<p><?php the_field('detail_4_2') ;?></p>

          <?php $content_img_4_1 = get_field('content_img_4_1'); if ($content_img_4_1): ?>
            <img src="<?php echo esc_url($content_img_4_1['url']); ?>" alt="<?php echo esc_attr($content_img_4_1['alt']); ?>" class="hamburger_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/hamburger_1.jpg" class="hamburger_img">
          <?php endif; ?>

    	</content>
    </section>

<?php get_footer(); ?>