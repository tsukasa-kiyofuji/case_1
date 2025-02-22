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
	        <li><a href="<?php echo home_url('/concept'); ?>">Concept<br><span>私たちについて</span></a></li>
			<li><a href="<?php echo home_url('/company'); ?>">Company<br><span>企業情報</span></a></li>
			<li><a href="<?php echo home_url('/business'); ?>">Business<br><span>事業紹介</span></a></li>
			<ol>
			    <li><a href="">－電気設備工事</a></li>
			    <li><a href="">－リニューアル工事</a></li>
			    <li><a href="">－総合ビル管理</a></li>
			    <li><a href="">－プロパティマネジメント</a></li>
	　　    </ol>
			<li class="global-1st"><a href="<?php echo home_url('/works'); ?>">Works<br><span>実績紹介</span></a></li>
		</ul>
		<ul>
		    <li><a href="">ニュース</a></li>
			<li><a href="">採用情報❐</a></li>
			<li><a href="">お問い合わせ</a></li>
			<li><a href="">English</a></li>
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
			    		    <li><a href="">ニュース</a></li>
			    			<li><a href="">採用情報❐</a></li>
			    			<li><a href="">お問い合わせ</a></li>
			    			<li><a href="">English</a></li>
			    			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_social_icons.png"></a></li>
		    		    </div>
		    		    <div class="ul-two">
			    			<li><a href="<?php echo home_url('/concept'); ?>">Concept<br><span>私たちについて</span></a></li>
			    			<li><a href="<?php echo home_url('/company'); ?>">Company<br><span>企業情報</span></a></li>
			    			<div>
				    			<li><a href="<?php echo home_url('/business'); ?>">Business<br><span>事業紹介</span></a></li>
				    			<ol class="ol-one">
							    	<a href=""><li>－電気設備工事</li></a>
							    	<a href=""><li>－リニューアル工事</li></a>
							    	<a href=""><li>－総合ビル管理</li></a>
							    	<a href=""><li>－プロパティマネジメント</li></a>
			    	　　        </ol>
		    	            </div>
			    			<li><a href="<?php echo home_url('/works'); ?>">Works<br><span>実績紹介</span></a></li>
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
			    		    <li><a href="">ニュース</a></li>
			    			<li><a href="">採用情報❐</a></li>
			    			<li><a href="">お問い合わせ</a></li>
			    			<li><a href="">English</a></li>
			    			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_social_icons.png"></a></li>
		    		    </div>
		    		    <div class="ul-two">
			    			<li><a href="<?php echo home_url('/concept'); ?>">Concept<br><span>私たちについて</span></a></li>
			    			<li><a href="<?php echo home_url('/company'); ?>">Company<br><span>企業情報</span></a></li>
			    			<div>
				    			<li><a href="<?php echo home_url('/business'); ?>">Business<br><span>事業紹介</span></a></li>
				    			<ol class="ol-one">
							    	<a href=""><li>－電気設備工事</li></a>
							    	<a href=""><li>－リニューアル工事</li></a>
							    	<a href=""><li>－総合ビル管理</li></a>
							    	<a href=""><li>－プロパティマネジメント</li></a>
			    	　　        </ol>
		    	            </div>
			    			<li><a href="<?php echo home_url('/works'); ?>">Works<br><span>実績紹介</span></a></li>
			    		</div>	
		    		</ul>
		    	</nav>
	    	</div>
    	</section>
<!-- スクロールしたら表示させるヘッダー    	 -->
    	<div id="container">
	    	<div class="header-second">
		    	<h1>建物を大切にする人と</h1>
		    	<p>With the people who take care of building.</p>
	        </div>
        </div>
        <div class="header-third">
        	<ul>
        		<li>NEWS</li>
        		<li><a href="">冬季1DAYインターンシップを実施しました</a></li>
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
	    	<p>アキテムだからできること。</p>
	        <h1>建物のライフサイクルを<br>総合的に<br class="br-hidden-a"><span>マネジメントすること。</span></h1>
        </section>
        <section id="concept-wrapper">
        	<div>
	        	<p>長年の歴史で培ってきた技術を駆使し、<br class="br-hidden">建物をつくること。<br class="br-hidden">そして、完成した建物を大切に営み、活かし続けること。<br class="br-hidden">当社は、電気設備工事、総合ビル管理、リニューアル工事、<br class="br-hidden">プロパティマネジメントの4つの事業を柱とし、<br class="br-hidden">建物のライフサイクル全体を常に考えながら、<br class="br-hidden">建物のあらゆるフェーズに対応いたします。</p>
        	</div>
        	<div>
        		<img src="<?php echo get_template_directory_uri(); ?>/images/solution_img.png">
        	</div>    
        </section>
        <section id="business-wrapper">
        	<div>
	        	<h1>事業紹介<br><span>Business</span></h1>
	        	<p>アキテムは様々な角度から建物と接しています。</p>
	        	<p>その軸となる事業内容を紹介します。</p>
	        	<p><a href="">More</a></p>
        	</div>
        	<nav class="black-image">
        		<nav>
        			<a href="" class="img_1"><img src="<?php echo get_template_directory_uri(); ?>/images/lt.jpg"></a>
	        		<a href="" class="backimg-1"><h2><span>ライフサイクル<br class="br-hidden-a">トータルマネジメント</span><br><span>Life cycle total management</span></h2></a>
	        		<a href="" class="noneimg-1"><h2>建物の一生を<br><span>ライフサイクルトータルマネジメント</span></h2></a>
        		</nav>
        		<div>
	        		<nav>
	        			<a href="" class="img_2"><img src="<?php echo get_template_directory_uri(); ?>/images/el.jpg"></a>
		        		<a href="" class="backimg-2"><h2><span>電気設備工事</span><br><span>Electrical installation</span></h2></a>
		        		<a href="" class="noneimg-2"><h2>建物に光を<br><span>電気設備工事</span></h2></a>
		        	</nav>
		        	<nav>	
		        		<a href="" class="img_3"><img src="<?php echo get_template_directory_uri(); ?>/images/r.jpg"></a>
		        		<a href="" class="backimg-3"><h2><span>リニューアル工事</span><br><span>Renewal work</span></h2></a>
		        		<a href="" class="noneimg-3"><h2>建物に美を<br><span>リニューアル工事</span></h2></a>
	        		</nav>
        		</div>
        		<div>
	        		<nav>
	        			<a href="" class="img_4"><img src="<?php echo get_template_directory_uri(); ?>/images/pm.jpg"></a>
		        		<a href="" class="backimg-4"><h2><span>総合ビル管理</span><br><span>Integrated building management</span></h2></a>
		        		<a href="" class="noneimg-4"><h2>建物に力を<br><span>総合ビル管理</span></h2></a>
	        		</nav>
	        		<nav>
	        			<a href="" class="img_5"><img src="<?php echo get_template_directory_uri(); ?>/images/bm.jpg"></a>
	        			<a href="" class="backimg-5"><h2><span>プロパティ<br class="br-hidden">マネジメント</span><br><span>Property management</span></h2></a>
	        			<a href="" class="noneimg-5"><h2>建物に心を<br><span>プロパティマネジメント</span></h2></a>
	        		</nav>
        		</div>
        	</nav>
        </section>
        <section id="works-wrapper">
        	<div class="padding-first">
	            <h1>実績紹介<br><span>Works</span></h1>	
	            <p>アキテムがこれまで携わらせていただいた</p>
	            <p>様々な事例を紹介します。</p>
            </div>
            <nav class="work-image">
            	<nav class="workimg-1">
	            	<div>
	            		<a href=""><p>077</p><img src="<?php echo get_template_directory_uri(); ?>/images/20191013_077-scaled-e1592468345691.jpg"></a>
	            		<a href="" class="phrase-1"><li>戸田市 工場<br><span>Saitama/JP</span></li></a>
	            		<ul>
	            			<a href="" class="green"><li>詳細画像あり<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li>リニューアル</li></a>
	            			<a href="" class="black"><li>電気設備工事</li></a>
	            		</ul>
	            	</div>
	            	<div>
	            		<a href=""><p>086</p><img src="<?php echo get_template_directory_uri(); ?>/images/IMG_0220-scaled-e1592932364700.jpg"></a>
	            		<a href="" class="phrase-1"><li>相模原市 研究所<br><span>Kanagawa/JP</span></li></a>
            			<ul>
	            			<a href="" class="green"><li>詳細画像あり<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li>電気設備工事</li></a>
	            		</ul>
	            	</div>
            	</nav>
            	<nav class="workimg-2">
	            	<div>
	            		<a href=""><p>072</p><img src="<?php echo get_template_directory_uri(); ?>/images/01EFB063-D8FC-451B-8EB2-DD6515CACBAF-scaled-e1595391701957.jpeg"></a>
	            		<a href="" class="phrase-2"><li>江東区 オフィス<br><span>Tokyo/JP</span></li></a>
	            		<ul>
	            			<a href="" class="green"><li>詳細画像あり<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li>プロパティマネジメント</li></a>
	            			<a href="" class="black"><li>リニューアル</li></a>
	            			<a href="" class="black"><li>総合ビル管理</li></a>
	            			<a href="" class="black"><li>電気設備工事</li></a>		       
	            		</ul>
	            	</div>
	            	<div>
	            		<a href=""><p>071</p><img src="<?php echo get_template_directory_uri(); ?>/images/20180730_042-scaled-e1592466527451.jpg"></a>
	            		<a href="" class="phrase-2"><li>大田区 研修施設<br><span>Tokyo/JP</span></li></a>
	            		<ul>
	            			<a href="" class="green"><li>詳細画像あり<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li>リニューアル</li></a>
	            			<a href="" class="black"><li>電気設備工事</li></a>
	            		</ul>
	            	</div>
            	</nav>
            	<nav class="workimg-3">
	            	<div>
	            		<a href=""><p>064</p><img src="<?php echo get_template_directory_uri(); ?>/images/商業_10_H2-AOYAMA-BUILDING.jpg"></a>
	            		<a href="" class="phrase-1"><li>港区 商業・オフィス<br><span>Tokyo/JP</span></li></a>
	            		<ul>
	            			<a href="" class="green"><li>詳細画像あり<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li>リニューアル</li></a>
	            			<a href="" class="black"><li>電気設備工事</li></a>
	            		</ul>
	            	</div>
	            	<div>
	            		<a href=""><p>061</p><img src="<?php echo get_template_directory_uri(); ?>/images/12目黒区：小学校-scaled-e1595930704946.jpg"></a>
	            		<a href="" class="phrase-1"><li>目黒区 教育施設<br><span>Tokyo/JP</span></li></a>
	            		<ul>
	            			<a href="" class="green"><li>詳細画像あり<img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag-img.png"></li></a>
	            			<a href="" class="black"><li>リニューアル</li></a>
	            			<a href="" class="black"><li>電気設備工事</li></a>
	            		</ul>
	            	</div>
            	</nav>
            </nav>
            <a href="<?php echo home_url('/works'); ?>" class="more-works">More works</a>
        </section>
        <section id="company-wrapper">
        	<h1>企業情報<br><span>Company</span></h1>
        	<div>
        		<a href="">
        			<h2>トップメッセージ<br><span>Message</span></h2>
        			<p>企業理念に真摯に向き合い、<br>建築を通して社会に貢献する企業です。</p>
        			<p>More</p>	
        		</a>
        		<a href="">
        			<h2>会社概要<br><span>Outline</span></h2>
        			<p>世界に誇る技術をもって価値のある建物をつく<br class="br-hidden">り、活かし続けてきました。</p>
        			<p>More</p>
        		</a>
        		<a href="">
        			<h2>私たちについて<br><span>Concept</span></h2>
        			<p>私たちアキテムは、建物を大切にする人を大切<br class="br-hidden">にし<br class="br-hidden">目線を合わせて共に歩んでいきたい。</p>
	        		<p>More</p>
        		</a>	
        	</div>
        </section>
        <section id="recruit-wrapper">
        	<div><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/hero-pc.jpg"></a></div>
	        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/rc__recruit.png"></a>
	        <img src="<?php echo get_template_directory_uri(); ?>/images/rc__catch.png">
        </section>
<?php get_footer(); ?>