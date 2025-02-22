<?php
/**
Template Name: business
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
	    <section id="bus_introduce-wrapper">
	        <div>
	            <h2><span class="span-1st"><?php the_field('事業紹介') ?></span><br><span class="span-2nd"><?php the_field('business') ?></span></h2>
	        </div>
	        <div>
	        	<img src="<?php echo get_template_directory_uri(); ?>/images/lt.jpg">
	        </div>
	        <div>
	        	<h1><?php the_field('建物のライフサイクルを') ?><br><?php the_field('総合的にマネジメントする') ?></h1>
	        	<p><?php the_field('電気設備工事、総合ビル管理、リニューアル工事、プロパティマネジメント。') ?></p>
	        	<p><?php the_field('4つの事業を柱とし、建物のライフサイクル全体を常に考えながら、建物のあらゆるフェーズにも対応いたします。') ?></p>
	        </div>	
	    </section>
	    <section id="fourth_bus-wrapper">
	    	<nav id="nava">
	    		<div class="div-first">
	    			<h2><?php the_field('アキテムを支える') ?><br><?php the_field('4つの事業') ?></h2>
	    		</div>
	    		<div class="div-second">
	    			<div class="div1">
	    				<h2><?php the_field('建物をいつまでも大切にするための技術') ?></h2>
	    				<p><?php the_field('新築のビルを創る技術、これは高度な技術力とノウハウを有してできる業です。私たちも電気工事の分野で長期にわたりその実績を有しています。しかしながらビルオーナーにとっては「建てる」ことは目的ではありません。完成した建物を生かして事業を営み、活かしていくことが目的です。') ?><br><?php the_field('私たちは、電気設備工事、総合ビル管理、リニューアル工事、そしてプロパティマネジメントの4つの部門を通して、建物全体のライフサイクルを考え、あらゆるフェーズにも対応可能な企業を目指します。') ?></p>
	    				<img src="<?php echo get_template_directory_uri(); ?>/images/solution_img.png">
	    			</div>
	    			<div class="div2">
	    				<h2><?php the_field('4事業から構成される') ?><br><?php the_field('「ライフサイクルトータルマネジメント」') ?></h2>
	    				<p><?php the_field('私たちは建物のライフサイクルを総合的にマネジメントします。') ?><br><?php the_field('建物は、その価値がいつまでも損なわれぬよう、築年数や状態に応じて的確な判断と適切な対応が常に求められます。私たちは4つの事業を通してそれを可能としています。') ?></p>
	    			</div>
	    			<div class="div3">
	                    <div>
			        		<nav>
			        			<a href="" class="img_2"><img style="vertical-align:bottom" src="<?php echo get_template_directory_uri(); ?>/images/el.jpg"></a>
				        		<a href="" class="backimg-2"><h2><span><?php the_field('電気設備工事') ?></span><br><span><?php the_field('electical_installation') ?></span></h2></a>
				        		<a href="" class="noneimg-2"><h2><span><?php the_field('建物に光を') ?></span><br><span><?php the_field('電気設備工事') ?></span></h2></a>
				        	</nav>
				        	<nav>	
				        		<a href="" class="img_3"><img style="vertical-align:bottom" src="<?php echo get_template_directory_uri(); ?>/images/r.jpg"></a>
				        		<a href="" class="backimg-3"><h2><span><?php the_field('リニューアル工事') ?></span><br><span><?php the_field('renewal_work') ?></span></h2></a>
				        		<a href="" class="noneimg-3"><h2><span><?php the_field('建物に美を') ?></span><br><span><?php the_field('リニューアル工事') ?></span></h2></a>
			        		</nav>
		        		</div>
		        		<div>
			        		<nav>
			        			<a href="" class="img_4"><img style="vertical-align:bottom" src="<?php echo get_template_directory_uri(); ?>/images/pm.jpg"></a>
				        		<a href="" class="backimg-4"><h2><span><?php the_field('総合ビル管理') ?></span><br><span><?php the_field('integrated_building_management') ?></span></h2></a>
				        		<a href="" class="noneimg-4"><h2><span><?php the_field('建物に力を') ?></span><br><span><?php the_field('総合ビル管理') ?></span></h2></a>
			        		</nav>
			        		<nav>
			        			<a href="" class="img_5"><img style="vertical-align:bottom" src="<?php echo get_template_directory_uri(); ?>/images/bm.jpg"></a>
			        			<a href="" class="backimg-5"><h2><span><?php the_field('プロパティ') ?><br class="br-hidden"><?php the_field('マネジメント') ?></span><br><span><?php the_field('property_management') ?></span></h2></a>
			        			<a href="" class="noneimg-5"><h2><span><?php the_field('建物に心を') ?></span><br><span><?php the_field('プロパティマネジメント') ?></span></h2></a>
			        		</nav>
		        		</div>
		        	</div>
		    	</div>
	    	</nav>
	    </section>
	    <section id="bus_feature_wrapper"> 
	    	<nav id="navb">
		    	<nav id="navc">
		    		<div class="div4">
		    			<h2><?php the_field('事業の特徴') ?></h2>
		    		</div>
		    		<div class="div5">
		    			<div class="div5_1">
		    				<h2><?php the_field('あらゆるフェーズから対応できる柔軟性') ?></h2>
		    				<p><?php the_field('建物の築年数や状態は、人同様様々です。私たちは過去に多くの事例に関わってきたことで、') ?><br class="br-hidden"><?php the_field('どのようなタイミングからもお客様にとって最適な提案を致します。') ?></p>
		    			</div>
		    			<div class="div5_2">
		    				<nav>
		    					<li>
		    						<p><?php the_field('pattern1') ?></p>
		    					</li>
		    				</nav>
		    				<nav>
		    					<h3><?php the_field('ビル管理会社を移管するパターン') ?></h3>
		    					<p><?php the_field('管理会社の移管を検討する場合、私たちは現状の管理内容を確認、最適な実施頻度や仕様、そしてコストを提案します。') ?><br><?php the_field('またスムーズな切替も併せてご説明差し上げます。管理開始後は中長期的な視点で維持保全計画を策定。優先順位を設定しながら建物設備の更新や内外観の改修をご提案・実行します。') ?><br><?php the_field('ご要望に応じてオーナー様からに代わりテナント管理・リーシング等もお手伝いも致します。') ?></p>
		    					<div>
		    						<h4><?php the_field('ビル管理会社を移管するパターン') ?></h4>
		    						<img src="<?php echo get_template_directory_uri(); ?>/images/pattern-1.png">
		    					</div>
		    				</nav>
		    			</div>
		    			<div class="div5_3">
		    				<nav>
		    					<li>
		    						<p><?php the_field('pattern2') ?></p>
		    					</li>
		    				</nav>
		    				<nav>
		    					<h3><?php the_field('新築物件から業務を受けるパターン') ?></h3>
		    					<p><?php the_field('オフィスビル、マンション、学校などの新築物件への電気設備工事から行うことも可能です。これはアキテムが電気設備工事からスタートし、技術を磨いてきたからこそできる事例となります。また、新築物件が竣工した後のビル管理や資産管理、 長期計画によるリニューアル工事まで長きにわたってサポートいたします。') ?></p>
		    					<div>
		    						<h4><?php the_field('新築工事の電気施工管理から参画するパターン') ?></h4>
		    						<img src="<?php echo get_template_directory_uri(); ?>/images/pattern-2.png">
		    					</div>
		    				</nav>
		    			</div>
		    			<div class="div5_4">
		    				<h2><?php the_field('事業多角化の流れ') ?></h2>
		    				<p><?php the_field('当社は、昭和27年（1952年）に東京都渋谷区恵比寿にて、電気設備工事会社として発足しました。バブル経済終焉後、電気設備工事の技術を活かした総合ビル管理業務を立ち上げ、あわせて建築全般のリニューアル工事業務をスタートさせました。') ?><br><?php the_field('その後、ビル運営全体をサポートすることを目指し、オーナー要望があった場合に限って対応していたプロパティマネジメント事業を令和元年（2019年）より本格的にスタート。') ?><br><?php the_field('多くのビルオーナー様のパートナーとして様々なご要望にお応えしております。') ?></p>
		    				<div>
		    				    <img src="<?php echo get_template_directory_uri(); ?>/images/history.png">
		    				</div>
		    			</div>
		    			<div class="div5_5">
		    				<div class="div5_5_headline">
			    				<h2><?php the_field('様々な建物・施設への対応力') ?></h2>
			    				<p><?php the_field('人が生活し活動する場所に建物は必要不可欠です。') ?><br><?php the_field('オフィスビル、ホテル、医療施設、そして集合住宅など、様々な用途の建物を新築で携わった経験は、今も多くのお客様にからの要望にお応えできる私たちの技術のベースとなっています。') ?></p>
		    				</div>
		    				<div class="eighth_image">
		    					<div>
			    					<nav>
			    						<img src="<?php echo get_template_directory_uri(); ?>/images/case-1.png">
			    						<p><?php the_field('オフィスビル') ?></p>
			    					</nav>
			    					<nav>
			    						<img src="<?php echo get_template_directory_uri(); ?>/images/case-2.png">
			    						<p><?php the_field('マンション') ?></p>
			    					</nav>
			       					<nav>
			    						<img src="<?php echo get_template_directory_uri(); ?>/images/case-3.png">
			    						<p><?php the_field('学校') ?></p>
			    					</nav>
			      					<nav>
			    						<img src="<?php echo get_template_directory_uri(); ?>/images/case-4.png">
			    						<p><?php the_field('研究所') ?></p>
			    					</nav>
		    						<nav>
			    						<img src="<?php echo get_template_directory_uri(); ?>/images/case-5.png">
			    						<p><?php the_field('ホテル') ?></p>
			    					</nav>
			    					<nav>
			    						<img src="<?php echo get_template_directory_uri(); ?>/images/case-6.png">
			    						<p><?php the_field('老人介護施設') ?></p>
			    					</nav>
			       					<nav>
			    						<img src="<?php echo get_template_directory_uri(); ?>/images/case-7.png">
			    						<p><?php the_field('病院') ?></p>
			    					</nav>
			      					<nav>
			    						<img src="<?php echo get_template_directory_uri(); ?>/images/case-8.png">
			    						<p><?php the_field('劇場・体育館') ?></p>
			    					</nav>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
		    	</nav>
	    	</nav>
	    </section>
<?php get_footer(); ?>
  

