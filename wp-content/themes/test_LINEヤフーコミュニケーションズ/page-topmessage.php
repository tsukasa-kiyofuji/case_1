<?php get_header('2'); ?>

    	<section id="topmessage-wrapper">
    		<content>
    			<div>
    				<article>
    					<h1><?php the_field('top') ;?></h1>
    					<p><?php the_field('sub') ;?></p>
    				</article>
    				<nav>
    					<p><?php the_field('stc_1') ;?></p>
    					<p><?php the_field('stc_2') ;?></p>
    					<p><?php the_field('stc_3') ;?></p>
    					<p><?php the_field('stc_4') ;?></p>
    					<p><?php the_field('stc_5') ;?></p>
    					<p><?php the_field('stc_6') ;?></p>
    					<p><?php the_field('stc_7') ;?></p>
    					<p><?php the_field('stc_8') ;?></p>
    					<p><?php the_field('stc_9') ;?></p>
    					<li><?php the_field('ceo_name') ;?><img src="<?php echo get_template_directory_uri(); ?>/image/topmessage-wrapper/bl_signTxt-img-1.webp" class="CEO_name"></li>
    				</nav>
    			</div>
    		</content>
    	</section>
    	
<?php get_footer(); ?>