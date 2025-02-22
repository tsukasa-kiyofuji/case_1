<?php
/**
Template Name: works
***/
?>

<?php get_header(); ?>
<body>
	<div class="wrap-original-2">
<!-- レスポンシブ時のハンバーガーメニュー（ヘッダー常表示） -->
		<div class="hamburger-2">
			<span></span>
			<span></span>
			<span></span>
		</div>
<!-- レスポンシブ時のハンバーガーメニュー（ヘッダー常表示） -->		
<!-- レスポンシブ時のハンバーガーメニュー（開いたとき）			 -->
	<nav class="globalMenuSp">
		<div class="hamburger_third">
		    <span></span>
		    <span></span>
		    <span></span>
	    </div>
	    <ul>
	        <li><a href="<?php echo home_url('/concept'); ?>"><?php the_field('header_concept') ;?><br><span><?php the_field('header_私たちについて') ;?></span></a></li>
			<li><a href="<?php echo home_url('/company'); ?>"><?php the_field('header_company') ;?><br><span><?php the_field('header_企業情報') ;?></span></a></li>
			<li><a href="<?php echo home_url('/business'); ?>"><?php the_field('header_business') ;?><br><span><?php the_field('header_事業紹介') ;?></span></a></li>
			<ol>
			    <li><a href="">－<?php the_field('header_電気設備工事') ;?></a></li>
			    <li><a href="">－<?php the_field('header_リニューアル工事') ;?></a></li>
			    <li><a href="">－<?php the_field('header_総合ビル管理') ;?></a></li>
			    <li><a href="">－<?php the_field('header_プロパティマネジメント') ;?></a></li>
	　　    </ol>
			<li class="global-1st"><a href="<?php echo home_url('/works'); ?>"><?php the_field('header_works') ;?><br><span><?php the_field('header_実績紹介') ;?></span></a></li>
		</ul>
		<ul>
		    <li><a href=""><?php the_field('header_ニュース') ;?></a></li>
			<li><a href=""><?php the_field('header_採用情報') ;?></a></li>
			<li><a href=""><?php the_field('header_お問い合わせ') ;?></a></li>
			<li><a href=""><?php the_field('header_english') ;?></a></li>
			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_social_icons.png"></a></li>
	    </ul>
	</nav>
<!-- レスポンシブ時のハンバーガーメニュー（開いたとき）			 -->	
	<div id="loading">
		<img src="<?php echo get_template_directory_uri(); ?>/images/loader_anim.gif">
	</div>
<!-- 通常時に表示させるヘッダー -->
    <header id="header_concept">
    	<section>
    		<div class="first-container">
    		    <a href="<?php echo home_url(); ?>" class="top-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-logo.png"></a>
		    	<nav class="header-first">
		    		<ul>
		    			<div class="ul-one">
						    <li><a href=""><?php the_field('header_ニュース') ;?></a></li>
							<li><a href=""><?php the_field('header_採用情報') ;?></a></li>
							<li><a href=""><?php the_field('header_お問い合わせ') ;?></a></li>
							<li><a href=""><?php the_field('header_english') ;?></a></li>
			    			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_social_icons.png"></a></li>
		    		    </div>
		    		    <div class="ul-two">
							<li><a href="<?php echo home_url('/concept'); ?>"><?php the_field('header_concept') ;?><br><span><?php the_field('header_私たちについて') ;?></span></a></li>
							<li><a href="<?php echo home_url('/company'); ?>"><?php the_field('header_company') ;?><br><span><?php the_field('header_企業情報') ;?></span></a></li>
			    			<div>
				    			<li><a href="<?php echo home_url('/business'); ?>"><?php the_field('header_business') ;?><br><span><?php the_field('header_事業紹介') ;?></span></a></li>
				    			<ol class="ol-one">
								    <li><a href="">－<?php the_field('header_電気設備工事') ;?></a></li>
								    <li><a href="">－<?php the_field('header_リニューアル工事') ;?></a></li>
								    <li><a href="">－<?php the_field('header_総合ビル管理') ;?></a></li>
								    <li><a href="">－<?php the_field('header_プロパティマネジメント') ;?></a></li>
			    	　　        </ol>
		    	            </div>
							<li><a href="<?php echo home_url('/works'); ?>"><?php the_field('header_works') ;?><br><span><?php the_field('header_実績紹介') ;?></span></a></li>
			    		</div>		
		    		</ul>
		    	</nav>
		    </div>
    	</section>
    </header>
<!-- 通常時に表示させるヘッダー -->
    <main>
        <section id="works_introduce-wrapper">
        	<div class="works_div1">
        		<h2><span class="span-1st"><?php the_field('実績紹介') ?></span><br><span class="span-2nd"><?php the_field('works') ?></span></h2>
        	</div>
        	<nav>
	        	<div>
	        		<a><li><?php the_field('実績カテゴリ') ?></li></a>
	        	</div>
	        	<div>
	        		<a href=""><li><?php the_field('all') ?></li></a>
	        		<a href=""><li><?php the_field('電気設備工事') ?></li></a>
	        		<a href=""><li><?php the_field('総合ビル管理') ?></li></a>
	        		<a href=""><li><?php the_field('リニューアル') ?></li></a>
	        		<a href=""><li><?php the_field('プロパティマネジメント') ?></li></a>
	        	</div>
	        </nav>	
        </section>
        <section id="all_pic1-wrapper">
        	<nav>
	        	<div>
	        		<a href=""><p><?php the_field('070') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/01EFB063-D8FC-451B-8EB2-DD6515CACBAF-scaled-e1595391701957.jpeg"></a>	
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('江東区_オフィス1') ?></span><br><span><?php the_field('tokyojp1') ?></span></h2>
	        				<li class="green"><p><?php the_field('詳細画像あり') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li>
	        				<li><p><?php the_field('プロパティマネジメント1') ?></p></li>
	        				<li><p><?php the_field('リニューアル1') ?></p></li>
	        				<li><p><?php the_field('総合ビル管理1') ?></p></li>
	        				<li><p><?php the_field('電気設備工事1') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        	    <a href=""><p><?php the_field('006') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picT.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('渋谷区_オフィス2') ?></span><br><span><?php the_field('tokyojp2') ?></span></h2>
	        				<li><p><?php the_field('リニューアル2') ?></p></li>
	        				<li><p><?php the_field('総合ビル管理2') ?></p></li>
	        				<li><p><?php the_field('電気設備工事2') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('105') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picF.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('渋谷区_商業ビル3') ?></span><span></span></h2>
	        				<li><p><?php the_field('電気設備工事3') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('103') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picG.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('渋谷区_商業ビル4') ?></span><span></span></h2>
	        				<li><p><?php the_field('電気設備工事4') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('104') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picA.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('川崎市_共同住宅5') ?></span><span></span></h2>
	        				<li><p><?php the_field('電気設備工事5') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('102') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picU.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('cub撤去・新設工事6') ?></span><span></span></h2>
	        				<li><p><?php the_field('電気設備工事6') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('106') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picS.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('世田谷区_carショールーム7') ?></span><span></span></h2>
	        				<li><p><?php the_field('電気設備工事7') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('092') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picX.png"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('港区_オフィス8') ?></span><br><span><?php the_field('tokyojp8') ?></span></h2>
	        				<li class="green"><p><?php the_field('詳細画像あり') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li>
	        				<li><p><?php the_field('リニューアル8') ?></p></li>
	        				<li><p><?php the_field('総合ビル管理8') ?></p></li>
	        				<li><p><?php the_field('電気設備工事8') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('101') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picJ.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('目黒区_店舗・共同住宅9') ?></span><br><span><?php the_field('tokyojp9') ?></span></h2>
	        				<li><p><?php the_field('リニューアル9') ?></p></li>
	        				<li><p><?php the_field('総合ビル管理9') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('100') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picL.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('渋谷区_店舗・飲食店10') ?></span><br><span><?php the_field('tokyojp10') ?></span></h2>
	        				<li class="green"><p><?php the_field('詳細画像あり') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li>
	        				<li><p><?php the_field('リニューアル10') ?></p></li>
	        				<li><p><?php the_field('総合ビル管理10') ?></p></li>
	        				<li><p><?php the_field('電気設備工事10') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('099') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picN.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('渋谷区_事務所11') ?></span><br><span><?php the_field('tokyojp11') ?></span></h2>
	        				<li class="green"><p><?php the_field('詳細画像あり') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li>
	        				<li><p><?php the_field('リニューアル11') ?></p></li>
	        				<li><p><?php the_field('総合ビル管理11') ?></p></li>
	        				<li><p><?php the_field('電気設備工事11') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('098') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picP.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('港区_オフィス12') ?></span><br><span><?php the_field('tokyojp12') ?></span></h2>
	        				<li class="green"><p><?php the_field('詳細画像あり') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li>
	        				<li><p><?php the_field('リニューアル12') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('090') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picW.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('港区_オフィス13') ?></span><br><span><?php the_field('tokyojp13') ?></span></h2>
	        				<li><p><?php the_field('リニューアル13') ?></p></li>
	        				<li><p><?php the_field('電気設備工事13') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        	<div>
	        		<a href=""><p><?php the_field('097') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picV.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('港区_オフィス14') ?></span><br><span><?php the_field('tokyojp14') ?></span></h2>
	        				<li><p><?php the_field('リニューアル14') ?></p></li>
	        				<li><p><?php the_field('電気設備工事14') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	            <div>
	        		<a href=""><p><?php the_field('096') ?></p></a>
	        		<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/picO.jpg"></a>
	        		<a href="">
	        			<ul>
	        				<h2><span><?php the_field('港区_オフィス15') ?></span><br><span><?php the_field('tokyojp15') ?></span></h2>
	        				<li><p><?php the_field('リニューアル15') ?></p></li>
	        				<li><p><?php the_field('電気設備工事15') ?></p></li>
	        			</ul>
	        		</a>
	        	</div>
	        </nav>
        </section>        
        <section id="all_page1-wrapper">
        	<div>
        		<nav><li>1</li></nav>
        		<a href=""><li>2</li></a>
        		<a href=""><li>3</li></a>
        		<a href=""><li>4</li></a>
        		<a href=""><li>5</li></a>
        		<a href=""><li>></li></a>
        	</div>
        </section>
<?php get_footer(); ?>