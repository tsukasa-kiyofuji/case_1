<?php
/**
Template Name: company
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
    	<section id="com_info-wrapper">
    		<div>
    			<h2><span class="span-1st"><?php the_field('企業情報') ?></span><br><span class="span-2nd"><?php the_field('company') ?></span></h2>
    		</div>
            <div>
        		<a href="# com_overview-wrapper"><li><?php the_field('会社概要') ?></li></a>
        		<a href="# history-wrapper"><li><?php the_field('沿革') ?></li></a>
        		<a href="# garelly-wrapper"><li><?php the_field('社内ギャラリー') ?></li></a>
            </div>
    	</section>
    	<section id="com_overview-wrapper">
    		<nav>
	    		<div>
	    			<h2><?php the_field('会社概要') ?></h2>
	    		</div>
	    	</nav>
    		<nav>
	    		<div>
	    			<p><?php the_field('当社は、昭和27年（1952年）に東京都渋谷区恵比寿で電気設備工事会社として創業しました。') ?><br><?php the_field('バブル経済終焉後、電気設備工事の技術を活かした総合ビル管理業務を立ち上げ、あわせて建築全般のリニューアル工事業務をスタートしました。その後、オーナー要望があった場合に限って対応していたプロパティマネジメント事業を令和元年（2019年）より本格的にスタート。') ?></p><p><?php the_field('新築の電気施工管理から、我が国の都市インフラの発展に沿う形で事業を拡大しながら今に至りますが、一貫して「技術」そして「人」をベースとした価値観を大切にしています。') ?><br><?php the_field('多くのビルオーナー様のパートナーとして様々なご要望にお応えしながら、ビル全体をサポート可能な企業を目指しています。') ?></p>
	    		</div>
	    		<div>
	    			<table>
	    				<tr class="tr-first">
	    					<td><?php the_field('社名') ?></td>
	    					<td><?php the_field('株式会社アキテム') ?></td>
	    				</tr>
	    				<tr class="tr-second">
	    					<td><?php the_field('会社所在地') ?></td>
	    					<td>
	    					    <li><?php the_field('【本社】') ?><br><?php the_field('〒153-0043') ?><br><?php the_field('東京都目黒区東山1-1-2 東山ビル') ?></li>
	    					    <li><?php the_field('最寄駅') ?><br><?php the_field('東急東横線_中目黒駅_（徒歩8分）') ?><br><?php the_field('東京メトロ日比谷線 中目黒駅 （徒歩8分）') ?></li>
	    					    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.1623931845897!2d139.69026491514148!3d35.64837043938107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b529544c609%3A0x6dd30a90fb11bdd7!2z44CSMTUzLTAwNDMg5p2x5Lqs6YO955uu6buS5Yy65p2x5bGx77yR5LiB55uu77yR4oiS77yRIOadseWxseODk-ODqw!5e0!3m2!1sja!2sjp!4v1667889881314!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	    					    <li><?php the_field('【秋葉原オフィス】') ?><br><?php the_field('〒101-0041') ?><br><?php the_field('東京都千代田区神田須田町2丁目23-1 天翔秋葉原万世ビル705号室') ?></li>
	    					    <li><?php the_field('最寄駅') ?><br><?php the_field('jr秋葉原駅_（徒歩4分）') ?></li>
	    					    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.193138455714!2d139.7691214151426!3d35.69686453672213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c02c855b729%3A0x923e340464da7d25!2z5aSp57-U44Kq44OV44Kj44K556eL6JGJ5Y6f5LiH5LiW5qmL!5e0!3m2!1sja!2sjp!4v1667890077071!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	    					</td>
	    				</tr>
	    				<tr class="tr-third">
	    					<td><?php the_field('tel') ?></td>
	    					<td>
	    						<li><?php the_field('03-3760-7701（代表）') ?></li>
	    						<li><?php the_field('03-5256-1545（秋葉原オフィス）') ?></li>
	    					</td>
	    				</tr>
	    				<tr class="tr-fourth">
	    					<td><?php the_field('fax') ?></td>
	    					<td><?php the_field('03-3760-7709') ?></td>
	    				</tr>
	    				<tr class="tr-fifth">
	    					<td><?php the_field('代表者') ?></td>
	    					<td><?php the_field('代表取締役　鯉渕_健太郎') ?></td>
	    				</tr>
	    				<tr class="tr-sixth">
	    					<td><?php the_field('資本金') ?></td>
	    					<td><?php the_field('81,000,000円') ?></td>
	    				</tr>
	    				<tr class="tr-seventh">
	    					<td><?php the_field('創業') ?></td>
	    					<td><?php the_field('昭和27年11月1日') ?></td>
	    				</tr>
	    			</table>
	    		</div>
	    	</nav>	
    	</section>
    	<section id="history-wrapper">
    		<div>
	    		<div>
	    		    <h2><span><?php the_field('history') ?></span><br><span><?php the_field('沿革') ?></span></h2>
	    		</div>
    		</div>
    		<div>
    			<table>
    				<tr>
    					<td><?php the_field('1952年_11月') ?></td>
    					<td><?php the_field('東京都渋谷区恵比寿で秋田電気商会を創業') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1957年_1月') ?></td>
    					<td><?php the_field('資本金200万円をもって秋田電気株式会社を設立（代表取締役社長・神馬富蔵）') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1974年_10月') ?></td>
    					<td><?php the_field('本社（現：渋谷橋ａビル）竣工') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1981年_2月') ?></td>
    					<td><?php the_field('現ビル管理部門の母体となる株式会社フォー・ジー・エル設立') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1982年_9月') ?></td>
    					<td><?php the_field('資本金を8100万円に増資') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1987年_8月') ?></td>
    					<td>
    						<li><?php the_field('鯉渕要三が代表取締役社長に就任') ?></li>
    						<li><?php the_field('神馬富蔵が代表取締役会長に就任') ?></li>
    					</td>	
    				</tr>
    				<tr>
    					<td><?php the_field('1988年_10月') ?></td>
    					<td><?php the_field('株式会社フォー・ジー・エルにてビル管理業務を開始') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1989年_3月') ?></td>
    					<td><?php the_field('柏中央エレガンス新築') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1989年_5月') ?></td>
    					<td><?php the_field('目黒区上目黒のakビルに本社を移転') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1993年_4月') ?></td>
    					<td><?php the_field('株式会社アキテムに社名を変更') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1995年_6月') ?></td>
    					<td><?php the_field('ビル管理業務を開始') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('1996年_7月') ?></td>
    					<td><?php the_field('建築内装リニューアル工事開始') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('2007年_1月') ?></td>
    					<td><?php the_field('目黒区東山に本社を移転') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('2010年_4月') ?></td>
    					<td><?php the_field('プロパティマネジメント業務の受託を開始') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('2013年_6月') ?></td>
    					<td><?php the_field('宅地建物取引業に登録。テナント管理業務を開始。') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('2017年_11月') ?></td>
    					<td><?php the_field('創業65周年') ?></td>
    				</tr>
    				<tr>
    					<td><?php the_field('2018年_10月') ?></td>
    					<td>
    						<li><?php the_field('鯉渕健太郎が代表取締役社長に就任') ?></li>
    						<li><?php the_field('鯉渕要三が代表取締役会長に就任') ?></li>
    					</td>
    				</tr>
    				<tr>
    					<td><?php the_field('2021年_7月') ?></td>
    					<td><?php the_field('秋葉原オフィス開設') ?></td>
    				</tr>
    			</table>
    		</div>
    	</section>
    	<section id="garelly-wrapper">
    		<nav>
	    		<div>
	    			<h2><span><?php the_field('garelly') ?></span><br><span><?php the_field('社内ギャラリー') ?></span></h2>
	    		</div>
	    	</nav>
	    	<nav>
	    		<div>
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/img-1.jpg">
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/img-2.jpg">
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/img-3.jpg">
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/img-4.jpg">
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/img-5.jpg">
	    			<img src="<?php echo get_template_directory_uri(); ?>/images/img-6.jpg">
	    		</div>
    		</nav>
    	</section>
        <div id="TCL">
            <a href=""><li><span><?php the_field('トップ') ?><br class="br-hidden"><?php the_field('メッセージ') ?></span><br><span class="span-2nd"><?php the_field('message') ?></span></li></a>
            <a href=""><li><span><?php the_field('主要お得意先') ?></span><br><span class="span-2nd"><?php the_field('client') ?></span></li></a>
            <a href=""><li><span><?php the_field('営業資格') ?></span><br><span class="span-2nd"><?php the_field('license') ?></span></li></a>
        </div>
<?php get_footer(); ?>