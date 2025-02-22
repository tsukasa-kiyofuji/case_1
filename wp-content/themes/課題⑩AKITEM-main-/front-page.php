<?php get_header(); ?>

<body>
	<div class="wrap-original">
<!-- レスポンシブ時のハンバーガーメニュー（非表示）			 -->
		<div class="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>
	<nav class="globalMenuSp">
		<div class="hamburger_second">
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
<!-- レスポンシブ時のハンバーガーメニュー（非表示）-->	
    <div id="loading">
		<img src="<?php echo get_template_directory_uri(); ?>/images/loader_anim.gif">
	</div>
<!-- 通常時に表示させるヘッダー -->
    <header id="header">
    	<section>
    		<div class="first-container">
		    	<a href="<?php echo home_url(); ?>" class="top-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-logo-w.jpg"></a>
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
<!-- 通常時に表示させるヘッダー -->
<!-- スクロールしたら表示させるヘッダー    	 -->
    	<section class="header_scroll">
    		<div class="hamburger">
			    <span></span>
			    <span></span>
			    <span></span>
			</div>
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
<!-- スクロールしたら表示させるヘッダー    	 -->
    	<div id="container">
	    	<div class="header-second">
		    	<h1><?php the_field('建物を大切にする人と') ?></h1>
		    	<p><?php the_field('with_the_people_who_take_care_of_building.') ?></p>
	        </div>
        </div>
        <div class="header-third">
        	<ul>
        		<li><?php the_field('news') ?></li>
        		<li><a href=""><?php the_field('冬季1dayインターンシップを実施しました') ?></a></li>
        	</ul>
        </div>
        <nav class="fade">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero__img-1.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero__img-2.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero__img-3.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero__img-4.jpg">
        </nav>
    </header>
    <main>
    	<section id="top-wrapper">
	    	<p><?php the_field('アキテムだからできること。') ?></p>
	        <h1><?php the_field('建物のライフサイクルを') ?><br><?php the_field('総合的に') ?><br class="br-hidden-a"><span><?php the_field('マネジメントすること。') ?></span></h1>
        </section>
        <section id="concept-wrapper">
        	<div>
	        	<p><?php the_field('長年の歴史で培ってきた技術を駆使し、') ?><br class="br-hidden"><?php the_field('建物をつくること。') ?><br class="br-hidden"><?php the_field('そして、完成した建物を大切に営み、活かし続けること。') ?><br class="br-hidden"><?php the_field('当社は、電気設備工事、総合ビル管理、リニューアル工事、') ?><br class="br-hidden"><?php the_field('プロパティマネジメントの4つの事業を柱とし、') ?><br class="br-hidden"><?php the_field('建物のライフサイクル全体を常に考えながら、') ?><br class="br-hidden"><?php the_field('建物のあらゆるフェーズに対応いたします。') ?></p>
        	</div>
        	<div>
        		<img src="<?php echo get_template_directory_uri(); ?>/images/solution_img.png">
        	</div>    
        </section>
        <section id="business-wrapper">
        	<div>
	        	<h1><?php the_field('事業紹介') ?><br><span><?php the_field('business') ?></span></h1>
	        	<p><?php the_field('アキテムは様々な角度から建物と接しています。') ?></p>
	        	<p><?php the_field('その軸となる事業内容を紹介します。') ?></p>
	        	<p><a href=""><?php the_field('more1') ?></a></p>
        	</div>
        	<nav class="black-image">
        		<nav>
        			<a href="" class="img_1"><img src="<?php echo get_template_directory_uri(); ?>/images/lt.jpg"></a>
	        		<a href="" class="backimg-1"><h2><span><?php the_field('ライフサイクル') ?><br class="br-hidden-a"><?php the_field('トータルマネジメント') ?></span><br><span><?php the_field('life_cycle_total_management') ?></span></h2></a>
	        		<a href="" class="noneimg-1"><h2><?php the_field('建物の一生を') ?><br><span><?php the_field('ライフサイクルトータルマネジメント') ?></span></h2></a>
        		</nav>
        		<div>
	        		<nav>
	        			<a href="" class="img_2"><img src="<?php echo get_template_directory_uri(); ?>/images/el.jpg"></a>
		        		<a href="" class="backimg-2"><h2><span><?php the_field('電気設備工事') ?></span><br><span><?php the_field('electrical_installation') ?></span></h2></a>
		        		<a href="" class="noneimg-2"><h2><?php the_field('建物に光を') ?><br><span><?php the_field('電気設備工事') ?></span></h2></a>
		        	</nav>
		        	<nav>	
		        		<a href="" class="img_3"><img src="<?php echo get_template_directory_uri(); ?>/images/r.jpg"></a>
		        		<a href="" class="backimg-3"><h2><span><?php the_field('リニューアル工事') ?></span><br><span><?php the_field('renewal_work') ?> work</span></h2></a>
		        		<a href="" class="noneimg-3"><h2><?php the_field('建物に美を') ?><br><span><?php the_field('リニューアル工事') ?></span></h2></a>
	        		</nav>
        		</div>
        		<div>
	        		<nav>
	        			<a href="" class="img_4"><img src="<?php echo get_template_directory_uri(); ?>/images/pm.jpg"></a>
		        		<a href="" class="backimg-4"><h2><span><?php the_field('総合ビル管理') ?></span><br><span><?php the_field('integrated_building_management') ?></span></h2></a>
		        		<a href="" class="noneimg-4"><h2><?php the_field('建物に力を') ?><br><span><?php the_field('総合ビル管理') ?></span></h2></a>
	        		</nav>
	        		<nav>
	        			<a href="" class="img_5"><img src="<?php echo get_template_directory_uri(); ?>/images/bm.jpg"></a>
	        			<a href="" class="backimg-5"><h2><span><?php the_field('プロパティ') ?><br class="br-hidden"><?php the_field('マネジメント') ?></span><br><span><?php the_field('property_management') ?></span></h2></a>
	        			<a href="" class="noneimg-5"><h2><?php the_field('建物に心を') ?><br><span><?php the_field('プロパティマネジメント') ?></span></h2></a>
	        		</nav>
        		</div>
        	</nav>
        </section>
        <section id="works-wrapper">
        	<div class="padding-first">
	            <h1><?php the_field('実績紹介') ?><br><span><?php the_field('works') ?></span></h1>	
	            <p><?php the_field('アキテムがこれまで携わらせていただいた') ?></p>
	            <p><?php the_field('様々な事例を紹介します。') ?></p>
            </div>
            <nav class="work-image">
            	<nav class="workimg-1">
	            	<div>
	            		<a href=""><p><?php the_field('077') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/20191013_077-scaled-e1592468345691.jpg"></a>
	            		<a href="" class="phrase-1"><li><?php the_field('戸田市_工場1') ?><br><span><?php the_field('saitamajp1') ?></span></li></a>
	            		<ul>
	            			<a href="" class="green"><li><?php the_field('詳細画像あり') ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li><?php the_field('リニューアル1') ?></li></a>
	            			<a href="" class="black"><li><?php the_field('電気設備工事1') ?></li></a>
	            		</ul>
	            	</div>
	            	<div>
	            		<a href=""><p><?php the_field('086') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/IMG_0220-scaled-e1592932364700.jpg"></a>
	            		<a href="" class="phrase-1"><li><?php the_field('相模原市_研究所2') ?><br><span><?php the_field('kanagawajp2') ?></span></li></a>
            			<ul>
	            			<a href="" class="green"><li><?php the_field('詳細画像あり') ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li><?php the_field('電気設備工事2') ?></li></a>
	            		</ul>
	            	</div>
            	</nav>
            	<nav class="workimg-2">
	            	<div>
	            		<a href=""><p><?php the_field('072') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/01EFB063-D8FC-451B-8EB2-DD6515CACBAF-scaled-e1595391701957.jpeg"></a>
	            		<a href="" class="phrase-2"><li><?php the_field('江東区_オフィス3') ?><br><span><?php the_field('tokyojp3') ?></span></li></a>
	            		<ul>
	            			<a href="" class="green"><li><?php the_field('詳細画像あり') ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li><?php the_field('プロパティマネジメント3') ?></li></a>
	            			<a href="" class="black"><li><?php the_field('リニューアル3') ?></li></a>
	            			<a href="" class="black"><li><?php the_field('総合ビル管理3') ?></li></a>
	            			<a href="" class="black"><li><?php the_field('電気設備工事3') ?></li></a>		       
	            		</ul>
	            	</div>
	            	<div>
	            		<a href=""><p><?php the_field('071') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/20180730_042-scaled-e1592466527451.jpg"></a>
	            		<a href="" class="phrase-2"><li><?php the_field('大田区_研究施設4') ?><br><span><?php the_field('tokyojp4') ?></span></li></a>
	            		<ul>
	            			<a href="" class="green"><li><?php the_field('詳細画像あり') ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li><?php the_field('リニューアル4') ?></li></a>
	            			<a href="" class="black"><li><?php the_field('電気設備工事4') ?></li></a>
	            		</ul>
	            	</div>
            	</nav>
            	<nav class="workimg-3">
	            	<div>
	            		<a href=""><p><?php the_field('064') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/商業_10_H2-AOYAMA-BUILDING.jpg"></a>
	            		<a href="" class="phrase-1"><li><?php the_field('港区_商業・オフィス5') ?><br><span><?php the_field('tokyojp5') ?></span></li></a>
	            		<ul>
	            			<a href="" class="green"><li><?php the_field('詳細画像あり') ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li><?php the_field('リニューアル5') ?></li></a>
	            			<a href="" class="black"><li><?php the_field('電気設備工事5') ?></li></a>
	            		</ul>
	            	</div>
	            	<div>
	            		<a href=""><p><?php the_field('061') ?></p><img src="<?php echo get_template_directory_uri(); ?>/images/12目黒区：小学校-scaled-e1595930704946.jpg"></a>
	            		<a href="" class="phrase-1"><li><?php the_field('目黒区_教育施設6') ?><br><span><?php the_field('tokyojp6') ?></span></li></a>
	            		<ul>
	            			<a href="" class="green"><li><?php the_field('詳細画像あり') ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li><?php the_field('リニューアル6') ?></li></a>
	            			<a href="" class="black"><li><?php the_field('電気設備工事6') ?></li></a>
	            		</ul>
	            	</div>
            	</nav>
            </nav>
            <a href="<?php echo home_url('/works'); ?>" class="more-works"><?php the_field('more_works') ?></a>
        </section>
        <section id="company-wrapper">
        	<h1><?php the_field('企業情報') ?><br><span><?php the_field('company') ?></span></h1>
        	<div>
        		<a href="">
        			<h2><?php the_field('トップメッセージ') ?><br><span><?php the_field('message') ?></span></h2>
        			<p><?php the_field('企業理念に真摯に向き合い、') ?><br><?php the_field('建築を通して社会に貢献する企業です。') ?></p>
        			<p><?php the_field('more2') ?></p>	
        		</a>
        		<a href="">
        			<h2><?php the_field('会社概要') ?><br><span><?php the_field('outline') ?></span></h2>
        			<p><?php the_field('世界に誇る技術をもって価値のある建物をつく') ?><br class="br-hidden"><?php the_field('り、活かし続けてきました。') ?></p>
        			<p><?php the_field('more2') ?></p>
        		</a>
        		<a href="">
        			<h2><?php the_field('私たちについて') ?><br><span><?php the_field('concept') ?></span></h2>
        			<p><?php the_field('私たちアキテムは、建物を大切にする人を大切') ?><br class="br-hidden"><?php the_field('にし') ?><br class="br-hidden"><?php the_field('目線を合わせて共に歩んでいきたい。') ?></p>
	        		<p><?php the_field('more2') ?></p>
        		</a>	
        	</div>
        </section>
        <section id="recruit-wrapper">
        	<div><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/hero-pc.jpg"></a></div>
	        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/rc__recruit.png"></a>
	        <img src="<?php echo get_template_directory_uri(); ?>/images/rc__catch.png">
        </section>

<?php get_footer(); ?>