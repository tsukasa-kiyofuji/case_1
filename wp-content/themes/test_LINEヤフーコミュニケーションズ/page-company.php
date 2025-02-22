<?php get_header('2'); ?>

    	<section id="com-overview-wrapper">
    		<content>
    			<div>
    				<h1><?php the_field('top') ;?></h1>
    				<p><?php the_field('sub') ;?></p>
    				<h2><?php the_field('company_name') ;?></h2>
    				<div class="explain_table">
    					<ul>
    						<span><?php the_field('sec_1') ;?></span>
    					    <li><?php the_field('ctt_1') ;?></li>
    					</ul>
    					<ul>
    						<span><?php the_field('sec_2') ;?></span>
    					    <li><?php the_field('ctt_2') ;?></li>
    					</ul>
    					<ul>
    						<span><?php the_field('sec_3') ;?></span>
    					    <li><?php the_field('ctt_3') ;?></li>
    					</ul>
    					<ul>
    						<span><?php the_field('sec_4') ;?></span>
    					    <li><?php the_field('ctt_4') ;?></li>
    					</ul>
    					<ul>
    						<span><?php the_field('sec_5') ;?></span>
    					    <li><?php the_field('ctt_5') ;?></li>
    					</ul>
    					<ul>
    						<span><?php the_field('sec_6') ;?></span>
    					    <li><?php the_field('ctt_6') ;?></li>
    					</ul>
    					<ul>
    						<span><?php the_field('sec_7') ;?></span>
    						<nav>
	    					    <li><?php the_field('ctt_7_1') ;?></li>
	    					    <li><a href=""><span><?php the_field('ctt_7_2') ;?></span><img src="<?php echo get_template_directory_uri(); ?>/image/com-overview-wrapper/icon-map-1.svg" class="map_icon"></a></li>
    					    </nav>
    					</ul>
    					<ul>
    						<span><?php the_field('sec_8') ;?></span>
    					    <li><?php the_field('ctt_8') ;?><img src="<?php echo get_template_directory_uri(); ?>/image/header/icon_arrow-right-up.svg" class="arrow_4"></li>
    					</ul>
    				</div>
    			</div>
    		</content>
    	</section>
    	
<?php get_footer(); ?>