<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_1') ;?></h2>
    		<p><?php the_field('detail_1_1') ;?></p>

          <?php $content_img_1_1 = get_field('content_img_1_1'); if ($content_img_1_1): ?>
            <img src="<?php echo esc_url($content_img_1_1['url']); ?>" alt="<?php echo esc_attr($content_img_1_1['alt']); ?>" class="snuggle_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/snuggle_1.jpg" class="snuggle_img">
          <?php endif; ?>

    		<p><?php the_field('detail_1_2') ;?></p>

		  <?php $content_img_1_2 = get_field('content_img_1_2'); if ($content_img_1_2): ?>
            <img src="<?php echo esc_url($content_img_1_2['url']); ?>" alt="<?php echo esc_attr($content_img_1_2['alt']); ?>" class="snuggle_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/snuggle_2.jpg" class="snuggle_img">
          <?php endif; ?>
          
    	</content>
    </section>

<?php get_footer(); ?>