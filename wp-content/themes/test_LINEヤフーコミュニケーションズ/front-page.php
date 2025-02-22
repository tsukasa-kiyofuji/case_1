<?php get_header(); ?>

<div class="wrap-original">
<div><img src="<?php echo get_template_directory_uri(); ?>/image/black.png" class="black"></div>
<body>
<!-- ヘッダー-->
	<header>
        <content>
        	<div class="header_main">
        		<ul>
        			<li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/header/header-logo.svg" class="header_logo"></a></li>
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
        	<nav class="header_main_sub">
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
    <!-- scroll時、出現のヘッダー	 -->
        <article class="show_article">
        　　<div class="header_scroll">
        		<ul>
        			<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/header/header-logo.svg" class="header_logo_2"></a></li>
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
    	</article>
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
    	<section id="top-wrapper">
    	  <?php $background_image_top_1 = get_field('background_image_top_1'); ?>
    		<content class="custom-background" style="background-image: url('<?php echo esc_url($background_image_top_1['url']); ?>');">
    			<div>
    				<h1>Enjoy the Challenges Together</h1>
    				<nav>
    					<a href="">
    						<?php $top_image = get_field('top_image'); if ($top_image): ?>
							    <img src="<?php echo esc_url($top_image['url']); ?>" alt="<?php echo esc_attr($top_image['alt']); ?>" class="color150">
							<?php else: ?>
							    <img src="<?php echo esc_url(get_template_directory_uri() . '/image/top-wrapper/top_2.png'); ?>" alt="デフォルト画像" class="color150">
							<?php endif; ?>
    					</a>
	    				<nav class="cross_btn">
						    <span></span>
						    <span></span>
						</nav>
    				</nav>
    			</div>
    			<li class="ham_list_last_ex"><a href="">募集職種<span class="tri_1"></span></a></li>
    		</content>
    	</section>
        <section id="company-wrapper">
        	<content>
        		<div>
        			<h2>会社を知る</h2>
        			<p>LINEヤフーコミュニケーションズは世の中に向けて、「WOW」や「！」を創造するためにチャレンジし続ける会社です。<br class="br_1">私たちはグローバルトップレベルの価値創出をおこない、個人・組織が成長できる会社を目指しています。</p>
                    <nav>
                    	<a href="<?php echo home_url('/company'); ?>">
                    		<h3>会社概要</h3>
                    		<p>LINEヤフーコミュニケーションズについて</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/b.png" class="company_img_1">
                            <span class="circle_1"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
                    	</a>
                    	<a href="<?php echo home_url('/topmessage'); ?>">
                    		<h3>トップメッセージ</h3>
                    		<p>代表取締役社長CEO 鈴木優輔</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/a.png" class="company_img_2">
                            <span class="circle_2"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
                    	</a>
                    </nav>
        		</div>
        	</content>
        </section>
        <section id="job-wrapper">
        	<content>
        		<div class="sss">
        			<h2>仕事を知る</h2>
        			<p>持続的な価値創造を目指すLINEヤフーコミュニケーションズの、仕事に対するスタンスや仕事内容を職種別にご紹介します。</p>
        			<nav class="job_box">
        				<div class="box job_box_l">
	        				<a href="<?php echo home_url('/creative'); ?>">
	        					<img src="<?php echo get_template_directory_uri(); ?>/image/job-wrapper/job_1.png" class="job_img_1">
	        					<nav>
		        					<h3>クリエイティブ<span class="tri_8"></span></h3>
		                    		<p>各種サービスのデザイン・イラスト業務および運用業務おこなっています。</p>
		                            <span class="circle_3"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
	        					</nav>
	                    	</a>
	                    	<a href="<?php echo home_url('/customercare'); ?>">
	                            <img src="<?php echo get_template_directory_uri(); ?>/image/job-wrapper/job_2.png" class="job_img_2">
	                            <nav>
		                    		<h3>カスタマーケア・審査・モニタリング<span class="tri_8"></span></h3>
		                    		<p>LINEヤフーグループが提供するサービスのカスタマーケアや審査・モニタリング業務を通して、サービスの品質向上を推進しています。</p>
		                            <span class="circle_4"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>	                            	
	                            </nav>
	                    	</a>
	                    	<a href="<?php echo home_url('/service'); ?>">
	                    		<img src="<?php echo get_template_directory_uri(); ?>/image/job-wrapper/job_3.png" class="job_img_3">
	                    		<nav>
		                    		<h3>サービス運営<span class="tri_8"></span></h3>
		                    		<p>LINEヤフーグループが提供するサービスの運営ディレクションや各種分析のほか、サービス関連の通訳翻訳業務なども担っています。</p>
		                            <span class="circle_5"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
	                            </nav>
	                    	</a>
	                    	<a href="<?php echo home_url('/it'); ?>">
	                    		<img src="<?php echo get_template_directory_uri(); ?>/image/job-wrapper/job_4.png" class="job_img_4">
	                    		<nav>
		                    		<h3>社内IT・コーポレート<span class="tri_8"></span></h3>
		                    		<p>社内IT業務や後方、人事関連業務を通じて、環境整備や風土構成をおこない、会社・社員の成長を支援しています。</p>
		                            <span class="circle_6"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
	                            </nav>
	                    	</a>
        				</div>
        				<div class="box job_box_r">
	        				<a href="<?php echo home_url('/test'); ?>">
	        					<img src="<?php echo get_template_directory_uri(); ?>/image/job-wrapper/job_5.png" class="job_img_5">
	        					<nav>
		                    		<h3>テスト<span class="tri_8"></span></h3>
		                    		<p>国内外で開発されるLINEヤフーグループが提供するサービスに対し、品質向上を目的としたテキスト業務全般を担っています。</p>	                            
		                            <span class="circle_7"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
	                            </nav>
	                    	</a>
	                    	<a href="<?php echo home_url('/sales'); ?>">
	                    		<img src="<?php echo get_template_directory_uri(); ?>/image/job-wrapper/job_6.png" class="job_img_6">
	                    		<nav>
		                    		<h3>セールス・マーケティング<span class="tri_8"></span></h3>
		                    		<p>LINEヤフーグループが提供するサービスの利用拡大を目的として、顧客へのコンサルティング・マーケティングをおこなっています。</p>	                            
		                            <span class="circle_8"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
	                            </nav>
	                    	</a>
	                    	<a href="<?php echo home_url('/project'); ?>">
	                    		<img src="<?php echo get_template_directory_uri(); ?>/image/job-wrapper/job_7.png" class="job_img_7">
	                    		<nav>
		                    		<h3>企画・管理<span class="tri_8"></span></h3>
		                    		<p>サービスの新たな価値創出をするプロジェクトの企画推進や、サービス運営組織の業務最適化・管理をおこなっています。</p>
		                            <span class="circle_9"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
	                            </nav>
	                    	</a>
	                    	<a href="">
	                    		<img src="<?php echo get_template_directory_uri(); ?>/image/job-wrapper/job_8.jpg" class="job_img_8">
	                    		<nav>
		                    		<h3>募集中のポジション<span class="tri_8"></span></h3>
		                    		<p>職種や雇用形態など、さまざまな条件で募集中の職種が検索できます。</p>	                            
		                            <span class="circle_10"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
	                            </nav>
	                    	</a>
        				</div>
                    </nav>
        		</div>
        	</content>
        </section>
        <section id="human-wrapper">
        	<content>
        		<div class="human">
        			<h2>人を知る</h2>
        			<p>LINEヤフーコミュニケーションズでは経歴・国籍・職能・年齢など、多様性に富んだ社員が働いています。<br class="br_1">さまざまな領域で活躍する社員についてご紹介します。</p>
        			<nav class="auto">
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_1.png" class="auto_img_1"></li>
        					<h3>グローバルに、LINEが生む楽しさを「届ける」</h3>
        					<p>#サービス運営 #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_2.png" class="auto_img_2"></li>
        					<h3>ノウハウを結集し、広告営業で組織力の底上げを</h3>
        					<p>#セールスマーケティング #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_3.png" class="auto_img_3"></li>
        					<h3>多角的な審査でLINEのブランドを守り、作り、届ける</h3>
        					<p>#カスタマーケア・審査・モニタリング #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_4.png" class="auto_img_4"></li>
        					<h3>AI運営は発展分野　いい環境は、自分たちで作り出す</h3>
        					<p>#サービス運営 #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_5.png" class="auto_img_5"></li>
        					<h3>変化する金融領域、時代に翻弄されない価値を生み出す</h3>
        					<p>#サービス運営 #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_6.png" class="auto_img_6"></li>
        					<h3>カスタマーケアから、ユーザーの「最高の体験」を</h3>
        					<p>#カスタマーケア・審査・モニタリング #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_7.png" class="auto_img_7"></li>
        					<h3>「LINEって楽しい」を守る　モニタリングの奥深さへの挑戦</h3>
        					<p>#カスタマーケア・審査・モニタリング #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_8.png" class="auto_img_8"></li>
        					<h3>地方発"最強"のPRチームが目指す新たな到達点</h3>
        					<p>#社内IT・コーポレート #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_9.png" class="auto_img_9"></li>
        					<h3>ITで社内効率化を実現するスペシャリスト</h3>
        					<p>#社内IT・コーポレート #リーダー</p>
        				</a>
        				<a href="">
        					<li><img src="<?php echo get_template_directory_uri(); ?>/image/human-wrapper/auto_10.png" class="auto_img_10"></li>
        					<h3>業務改善でアジアをリードする存在に</h3>
        					<p>#サービス運営 #リーダー</p>
        				</a>
        			</nav>
        			<li class="interview_btn"><a href="">他のインタビューを見る<span class="tri_2"></span></a></li>
        			<nav class="color_btn">
        				<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/top-wrapper/top_2.png" class="color150_2"></a></li>
        				<p>多様に満ちたメンバー150人をご紹介します。</p>
        			</nav>
        		</div>
        	</content>
        </section>
        <section id="env-wrapper">
        	<content>
        		<div>
        			<h2>環境を知る</h2>
        			<p>LINEヤフーコミュニケーションズはONの空間とOFFの空間を分離することで、気分の切り替えがしやすく、<br class="br_1">新しい価値の創出に没頭できる空間です。そんな働く環境についてご紹介します。</p>
        			<nav>
        				<a href="<?php echo home_url('/environment'); ?>">
                    		<h3>福利厚生・制度</h3>
                    		<p>成長とチャレンジを促す制度や取り組み</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/env-wrapper/env_1.png" class="env_img_1">
                            <span class="circle_11"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
                    	</a>
                    	<a href="<?php echo home_url('/environment'); ?>#sticky_office">
                    		<h3>オフィスの環境</h3>
                    		<p>オフィスの写真や動画</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/env-wrapper/env_2.png" class="env_img_2">
                            <span class="circle_12"><img src="<?php echo get_template_directory_uri(); ?>/image/company-wrapper/icon_arrow_next.svg" class="arrow_r"></span>
                    	</a>
                    </nav>
        		</div>
        	</content>
        </section>

<?php get_footer(); ?>