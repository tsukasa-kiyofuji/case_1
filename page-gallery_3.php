<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_3') ;?></h2>
    		<p><?php the_field('detail_3_1') ;?></p>
    		<div class="pictogram_flex">

          <?php $content_img_3_1 = get_field('content_img_3_1'); if ($content_img_3_1): ?>
            <img src="<?php echo esc_url($content_img_3_1['url']); ?>" alt="<?php echo esc_attr($content_img_3_1['alt']); ?>" class="pictogram_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/pictogram_1.jpg" class="pictogram_img">
          <?php endif; ?>

          <?php $content_img_3_2 = get_field('content_img_3_2'); if ($content_img_3_2): ?>
            <img src="<?php echo esc_url($content_img_3_2['url']); ?>" alt="<?php echo esc_attr($content_img_3_2['alt']); ?>" class="pictogram_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/pictogram_2.jpg" class="pictogram_img">
          <?php endif; ?>

          <?php $content_img_3_3 = get_field('content_img_3_3'); if ($content_img_3_3): ?>
            <img src="<?php echo esc_url($content_img_3_3['url']); ?>" alt="<?php echo esc_attr($content_img_3_3['alt']); ?>" class="pictogram_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/pictogram_3.jpg" class="pictogram_img">
          <?php endif; ?>

          <?php $content_img_3_4 = get_field('content_img_3_4'); if ($content_img_3_4): ?>
            <img src="<?php echo esc_url($content_img_3_4['url']); ?>" alt="<?php echo esc_attr($content_img_3_4['alt']); ?>" class="pictogram_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/pictogram_4.jpg" class="pictogram_img">
          <?php endif; ?>

    		</div>
    	</content>
    </section>

<?php get_footer(); ?>