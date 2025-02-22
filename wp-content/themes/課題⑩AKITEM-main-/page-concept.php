<?php
/**
Template Name: concept
***/
?>

<?php get_header(); ?>

<body>
	<div class="wrap-original">
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
    	<section id="statement-wrapper">
            	<div>
            		<h2><span class="span-1st"><?php the_field('main_title') ?></span><br><span class="span-2nd"><?php the_field('main_subtitle') ?></span></h2>
            		<h1><span><?php the_field('statement_title1') ?><br class="br-hidden"><?php the_field('statement_title2') ?></span><br><span><?php the_field('statement_subtitle') ?></span></h1>
            		<p><?php the_field('p1') ?></p>
            		<p><?php the_field('p2') ?><br><?php the_field('p3') ?><br><?php the_field('p4') ?></p>
            		<p><?php the_field('p5') ?><br><?php the_field('p6') ?><br><?php the_field('p7') ?></p>
            		<p><?php the_field('p8') ?><br><?php the_field('p9') ?></p>
            		<p><?php the_field('p10') ?><br><?php the_field('p11') ?><br><?php the_field('p12') ?></p>
            		<p><?php the_field('p13') ?></p>
            	</div>
        </section>  
    	<div id="woman-image"></div>	
        <section id="corporate-wrapper">
        	<div>
        		<h2><span class="span-1st"><?php the_field('企業理念') ?></span><br><span class="span-2nd"><?php the_field('corporate_philosophy') ?></span></h2>
        		<p><?php the_field('価値ある建物を') ?><br><?php the_field('技術をもってつくり活かし続け、') ?><br><?php the_field('そこに関わる全ての人をゆたかにすること') ?></p>
        	</div>
        </section>
        <section id="mission-wrapper">
        	<div>
        		<h2><span class="span-1st"><?php the_field('未来のために') ?><br class="br-hidden"><?php the_field('やるべきこと') ?></span><br><span class="span-2nd"><?php the_field('mission') ?></span></h2>
        		<p><?php the_field('100年企業を目指し、') ?><br><?php the_field('変化を厭わず挑戦し続けます。') ?></p>
        		<p><?php the_field('4位一体の相乗効果で、') ?><br><?php the_field('お客様の期待を超えます。') ?></p>
        		<p><?php the_field('「技術」と「人」を財産に、') ?><br><?php the_field('建物を通じて社会に貢献します。') ?></p>
            </div>
        </section>
        <section id="solution-wrapper">
        	<div>
        		<h2><span class="span-1st"><?php the_field('私たちの解決方法') ?></span><br><span class="span-2nd"><?php the_field('solution') ?></span></h2>
        		<h1><?php the_field('建物をいつまでも') ?><br><?php the_field('大切にするための技術') ?></h1>
        	</div>
        	<div>
        		<img src="<?php echo get_template_directory_uri(); ?>/images/solution_img.png">
        	</div>
        	<div>
        		<p><?php the_field('電気工事会社だけであった当時、私たちにとっては「建物を建てること」がゴールであり、そこで完了と考えていました。しかし、ビルオーナーにとっては「建物が立ったこと」がスタートです。建物は、建ててしまえば「全て完了」ということはなく、生き物と同様、常に手をかけ、メンテナンスし続けることが大切です。') ?><br><?php the_field('建物の技術が年々変化を遂げる中、私たちも同様に技術を磨き続けています。') ?><br><?php the_field('私たちは、電気設備工事業、総合ビル管理事業、リニューアル工事業、プロパティマネジメント事業の4つの部門を柱とし、建物のライフサイクル全体を考え、あらゆるケースに対応できる会社を目指し続けます。') ?></p>
        	</div>
        	<div>
	            <a href=""><li><span><?php the_field('アイデンティティ') ?></span><br><span class="span-2nd"><?php the_field('ci・vi') ?></span></li></a>
                <a href=""><li><span><?php the_field('当社の強み') ?></span><br><span class="span-2nd"><?php the_field('advantage') ?></span></li></a>
            </div>
        </section>
<?php get_footer(); ?>