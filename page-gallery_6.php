<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_6') ;?></h2>
    		<div class="womb_flex">
    		    <p><?php the_field('detail_6_1') ;?><br><?php the_field('detail_6_2') ;?></p>

              <?php $content_img_6_1 = get_field('content_img_6_1'); if ($content_img_6_1): ?>
                <img src="<?php echo esc_url($content_img_6_1['url']); ?>" alt="<?php echo esc_attr($content_img_6_1['alt']); ?>" class="pictogram_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/womb_1.jpg" class="pictogram_img">
              <?php endif; ?>

              <?php $content_img_6_2 = get_field('content_img_6_2'); if ($content_img_6_2): ?>
                <img src="<?php echo esc_url($content_img_6_2['url']); ?>" alt="<?php echo esc_attr($content_img_6_2['alt']); ?>" class="pictogram_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/womb_2.jpg" class="pictogram_img">
              <?php endif; ?>

              <?php $content_img_6_3 = get_field('content_img_6_3'); if ($content_img_6_3): ?>
                <img src="<?php echo esc_url($content_img_6_3['url']); ?>" alt="<?php echo esc_attr($content_img_6_3['alt']); ?>" class="pictogram_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/womb_3.jpg" class="pictogram_img">
              <?php endif; ?>

    		</div>
    	</content>
    </section>

<?php get_footer(); ?>