<!-- wrap-original、header_2バージョン 「company,topmessage,privacypolicy」-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LINE</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/my-script.js"></script>
  <?php wp_head(); ?>
</head>
<div class="wrap-original">
<div><img src="<?php echo get_template_directory_uri(); ?>/image/black.png" class="black"></div>
<body>
<!-- ヘッダー-->
	<header class="header_2">
        <content>
        	<div class="header_main_2">
        		<ul>
        			<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/header/header-logo.svg" class="header_logo_2"></a></li>
        		</ul>
        		<ul>
	        		<li><a href=""><?php the_field('header_1') ;?></a></li>
	        		<li><a href=""><?php the_field('header_2') ;?></a></li>
	        		<li><a href=""><?php the_field('header_3') ;?></a></li>
	        		<li><a href=""><?php the_field('header_4') ;?></a></li>
	        		<li><a href=""><?php the_field('header_5') ;?></a></li>
	        		<li><a href=""><?php the_field('header_6') ;?><span class="tri_1"></span></a></li>
        		</ul>
        	</div>
        <!-- hover時、出現のヘッダーサブカテ -->
        	<nav class="header_main_sub_2">
        		<ul>
        			<p class="space_1"></p>
        			<li><a href="<?php echo home_url('/company'); ?>"><span>・</span><?php the_field('header_sub_1_1') ;?></a></li>
        			<li><a href="<?php echo home_url('/topmessage'); ?>"><span>・</span><?php the_field('header_sub_1_2') ;?></a></li>
        		</ul>
        		<ul>
        			<p class="space_2"></p>
        			<div>
	        			<li><a href="<?php echo home_url('/creative'); ?>"><span>・</span><?php the_field('header_sub_2_1') ;?></a></li>
	        			<li><a href="<?php echo home_url('/customercare'); ?>"><span>・</span><?php the_field('header_sub_2_2') ;?></a></li>
	        			<li><a href="<?php echo home_url('/service'); ?>"><span>・</span><?php the_field('header_sub_2_3') ;?></a></li>
	        			<li><a href="<?php echo home_url('/it'); ?>"><span>・</span><?php the_field('header_sub_2_4') ;?></a></li>
	        		</div>
	        		<div>
	        			<li><a href="<?php echo home_url('/test'); ?>"><span>・</span><?php the_field('header_sub_2_5') ;?></a></li>
	        			<li><a href="<?php echo home_url('/sales'); ?>"><span>・</span><?php the_field('header_sub_2_6') ;?></a></li>
	        			<li><a href="<?php echo home_url('/project'); ?>"><span>・</span><?php the_field('header_sub_2_7') ;?></a></li>
        			</div>
        		</ul>
        		<ul>
        			<p class="space_3"></p>
        			<li><a href=""><span>・</span><?php the_field('header_sub_3_1') ;?></a></li>
        			<li><a href=""><span>・</span><?php the_field('header_sub_3_2') ;?><img src="<?php echo get_template_directory_uri(); ?>/image/header/icon_arrow-right-up.svg" class="arrow_1"></a></li>
        			<li><a href=""><span>・</span><?php the_field('header_sub_3_3') ;?><img src="<?php echo get_template_directory_uri(); ?>/image/header/icon_arrow-right-up.svg" class="arrow_1"></a></li>
        		</ul>
        		<ul>
        			<p class="space_1"></p>
        			<li><a href="<?php echo home_url('/environment'); ?>"><span>・</span><?php the_field('header_sub_4_1') ;?></a></li>
        			<li><a href="<?php echo home_url('/environment'); ?>#sticky_office"><span>・</span><?php the_field('header_sub_4_2') ;?></a></li>
        		</ul>
        		<ul>
        			<p class="space_1"></p>
        			<li><a href=""><span>・</span><?php the_field('header_sub_5_1') ;?></a></li>
        			<li><a href="<?php echo home_url('/question'); ?>"><span>・</span><?php the_field('header_sub_5_2') ;?></a></li>
        		</ul>
        	</nav>
        </content>
    <!-- ハンバーガーメニュー付ヘッダー（レスポンシブ時） -->
        <div class="header_responsive">
        	<nav class="res_topband">
        		<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/header/header-logo.svg" class="header_logo_4"></a></li>
	        	<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
        	</nav>
			<nav class="globalMenuSp">
	    		<ul>
	        		<li class="ham_list ham_list_1">
	        			<nav>
		        			<h4><?php the_field('header_1') ;?></h4>
		        			<aside class="list_1">
		        				<li><a href="<?php echo home_url('/company'); ?>"><span>・</span><?php the_field('header_sub_1_1') ;?></a></li>
	        					<li><a href="<?php echo home_url('/topmessage'); ?>"><span>・</span><?php the_field('header_sub_1_2') ;?></a></li>
		        			</aside>	        				
	        			</nav>
	        			<span class="tri_7_1">
	        		</li>
	        		<li class="ham_list ham_list_2">
	        			<nav>
		        			<h4><?php the_field('header_2') ;?></h4>
		        			<aside class="list_2">
			        			<li><a href="<?php echo home_url('/creative'); ?>"><span>・</span><?php the_field('header_sub_2_1') ;?></a></li>
			        			<li><a href="<?php echo home_url('/customercare'); ?>"><span>・</span><?php the_field('header_sub_2_2') ;?></a></li>
			        			<li><a href="<?php echo home_url('/service'); ?>"><span>・</span><?php the_field('header_sub_2_3') ;?></a></li>
			        			<li><a href="<?php echo home_url('/it'); ?>"><span>・</span><?php the_field('header_sub_2_4') ;?></a></li>
			        			<li><a href="<?php echo home_url('/test'); ?>"><span>・</span><?php the_field('header_sub_2_5') ;?></a></li>
			        			<li><a href="<?php echo home_url('/sales'); ?>"><span>・</span><?php the_field('header_sub_2_6') ;?></a></li>
			        			<li><a href="<?php echo home_url('/project'); ?>"><span>・</span><?php the_field('header_sub_2_7') ;?></a></li>
		        			</aside>	        				
	        			</nav>
	        			<span class="tri_7_2">
	        		</li>
	        		<li class="ham_list ham_list_3">
	        			<nav>
		        			<h4><?php the_field('header_3') ;?></h4>
		        			<aside class="list_3">
			        			<li><a href=""><span>・</span><?php the_field('header_sub_3_1') ;?></a></li>
			        			<li><a href=""><span>・</span><?php the_field('header_sub_3_2') ;?><img src="<?php echo get_template_directory_uri(); ?>/image/header/icon_arrow-right-up.svg" class="arrow_1"></a></li>
			        			<li><a href=""><span>・</span><?php the_field('header_sub_3_3') ;?><img src="<?php echo get_template_directory_uri(); ?>/image/header/icon_arrow-right-up.svg" class="arrow_1"></a></li>
		        			</aside>	        				
	        			</nav>
	        			<span class="tri_7_3">
	        		</li>
	        		<li class="ham_list ham_list_4">
	        			<nav>
		        			<h4><?php the_field('header_4') ;?></h4>
		        			<aside class="list_4">
		        				<li><a href="<?php echo home_url('/environment'); ?>"><span>・</span><?php the_field('header_sub_4_1') ;?></a></li>
	        					<li><a href="<?php echo home_url('/environment'); ?>#sticky_office"><span>・</span><?php the_field('header_sub_4_2') ;?></a></li>
		        			</aside>	        				
	        			</nav>
	        			<span class="tri_7_4">
	        		</li>
	        		<li class="ham_list ham_list_5">
	        			<nav>
		        			<h4><?php the_field('header_5') ;?></h4>
		        			<aside class="list_5">
		        				<li><a href=""><span>・</span><?php the_field('header_sub_5_1') ;?></a></li>
	        					<li><a href="<?php echo home_url('/question'); ?>"><span>・</span><?php the_field('header_sub_5_2') ;?></a></li>
		        			</aside>	        				
	        			</nav>
	        			<span class="tri_7_5">
	        		</li>
	        		<li class="ham_list_last"><a href=""><?php the_field('header_6') ;?><span class="tri_1"></span></a></li>
	    		</ul>
			</nav>
        </div>
	</header>
    <main>