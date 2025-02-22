<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_10') ;?></h2>
    		<div class="fish_flex">
    			<p><?php the_field('detail_10_1') ;?></p>

              <?php $content_img_10_1 = get_field('content_img_10_1'); if ($content_img_10_1): ?>
                <img src="<?php echo esc_url($content_img_10_1['url']); ?>" alt="<?php echo esc_attr($content_img_10_1['alt']); ?>" class="fish_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/fish_1.jpg" class="fish_img">
              <?php endif; ?>

              <?php $content_img_10_2 = get_field('content_img_10_2'); if ($content_img_10_2): ?>
                <img src="<?php echo esc_url($content_img_10_2['url']); ?>" alt="<?php echo esc_attr($content_img_10_2['alt']); ?>" class="fish_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/fish_2.jpg" class="fish_img">
              <?php endif; ?>

              <?php $content_img_10_3 = get_field('content_img_10_3'); if ($content_img_10_3): ?>
                <img src="<?php echo esc_url($content_img_10_3['url']); ?>" alt="<?php echo esc_attr($content_img_10_3['alt']); ?>" class="fish_img">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/fish_3.jpg" class="fish_img">
              <?php endif; ?>

    		</div>
    	</content>
    </section>

<?php get_footer(); ?>