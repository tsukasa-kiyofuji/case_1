<?php get_header("2"); ?>

<main>
    <section id="page-wrapper">
    	<content class="page_container">
    		<h2><?php the_field('title_5') ;?></h2>
    		<p class="margin_bottom_10px"><?php the_field('detail_5_1') ;?></p>
    		<p><?php the_field('detail_5_2') ;?></p>
    		<div class="chara_flex">

          <?php $content_img_5_1 = get_field('content_img_5_1'); if ($content_img_5_1): ?>
            <img src="<?php echo esc_url($content_img_5_1['url']); ?>" alt="<?php echo esc_attr($content_img_5_1['alt']); ?>" class="chara_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/chara_1.jpg" class="chara_img">
          <?php endif; ?>

          <?php $content_img_5_2 = get_field('content_img_5_2'); if ($content_img_5_2): ?>
            <img src="<?php echo esc_url($content_img_5_2['url']); ?>" alt="<?php echo esc_attr($content_img_5_2['alt']); ?>" class="chara_img">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/chara_2.jpg" class="chara_img">
          <?php endif; ?>

    		</div>
    	</content>
    </section>

<?php get_footer(); ?>