<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_7') ;?></h2>
    		<p><?php the_field('detail_7_1') ;?></p>

          <?php $content_img_7_1 = get_field('content_img_7_1'); if ($content_img_7_1): ?>
            <img src="<?php echo esc_url($content_img_7_1['url']); ?>" alt="<?php echo esc_attr($content_img_7_1['alt']); ?>" class="drawing_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/drawing_1.jpg" class="drawing_img">
          <?php endif; ?>

    		<p><?php the_field('detail_7_2') ;?></p>

          <?php $content_img_7_2 = get_field('content_img_7_2'); if ($content_img_7_2): ?>
            <img src="<?php echo esc_url($content_img_7_2['url']); ?>" alt="<?php echo esc_attr($content_img_7_2['alt']); ?>" class="drawing_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/drawing_2.jpg" class="drawing_img">
          <?php endif; ?>

    		<p class="margin_bottom_10px"><?php the_field('detail_7_3') ;?></p>
    		<p><?php the_field('detail_7_4') ;?></p>

          <?php $content_img_7_3 = get_field('content_img_7_3'); if ($content_img_7_3): ?>
            <img src="<?php echo esc_url($content_img_7_3['url']); ?>" alt="<?php echo esc_attr($content_img_7_3['alt']); ?>" class="drawing_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/drawing_3.jpg" class="drawing_img">
          <?php endif; ?>

    	</content>
    </section>

<?php get_footer(); ?>