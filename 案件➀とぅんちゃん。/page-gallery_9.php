<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_9') ;?></h2>
    		<div class="hip_flex">
    			  <p><?php the_field('detail_9_1') ;?><br><?php the_field('detail_9_2') ;?></p>

              <?php $content_img_9_1 = get_field('content_img_9_1'); if ($content_img_9_1): ?>
                <img src="<?php echo esc_url($content_img_9_1['url']); ?>" alt="<?php echo esc_attr($content_img_9_1['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_1.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_2 = get_field('content_img_9_2'); if ($content_img_9_2): ?>
                <img src="<?php echo esc_url($content_img_9_2['url']); ?>" alt="<?php echo esc_attr($content_img_9_2['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_2.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_3 = get_field('content_img_9_3'); if ($content_img_9_3): ?>
                <img src="<?php echo esc_url($content_img_9_3['url']); ?>" alt="<?php echo esc_attr($content_img_9_3['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_3.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_4 = get_field('content_img_9_4'); if ($content_img_9_4): ?>
                <img src="<?php echo esc_url($content_img_9_4['url']); ?>" alt="<?php echo esc_attr($content_img_9_4['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_4.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_5 = get_field('content_img_9_5'); if ($content_img_9_5): ?>
                <img src="<?php echo esc_url($content_img_9_5['url']); ?>" alt="<?php echo esc_attr($content_img_9_5['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_5.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_6 = get_field('content_img_9_6'); if ($content_img_9_6): ?>
                <img src="<?php echo esc_url($content_img_9_6['url']); ?>" alt="<?php echo esc_attr($content_img_9_6['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_6.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_7 = get_field('content_img_9_7'); if ($content_img_9_7): ?>
                <img src="<?php echo esc_url($content_img_9_7['url']); ?>" alt="<?php echo esc_attr($content_img_9_7['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_7.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_8 = get_field('content_img_9_8'); if ($content_img_9_8): ?>
                <img src="<?php echo esc_url($content_img_9_8['url']); ?>" alt="<?php echo esc_attr($content_img_9_8['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_8.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_9 = get_field('content_img_9_9'); if ($content_img_9_9): ?>
                <img src="<?php echo esc_url($content_img_9_9['url']); ?>" alt="<?php echo esc_attr($content_img_9_9['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_9.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_10 = get_field('content_img_9_10'); if ($content_img_9_10): ?>
                <img src="<?php echo esc_url($content_img_9_10['url']); ?>" alt="<?php echo esc_attr($content_img_9_10['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_10.jpg" class="hip_img">
              <?php endif; ?>

              <?php $content_img_9_11 = get_field('content_img_9_11'); if ($content_img_9_11): ?>
                <img src="<?php echo esc_url($content_img_9_11['url']); ?>" alt="<?php echo esc_attr($content_img_9_11['alt']); ?>" class="hip_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/hip_11.jpg" class="hip_img">
              <?php endif; ?>

    		</div>
    	</content>
    </section>

<?php get_footer(); ?>