jQuery(document).ready(function(){

// ハンバーガーメニュー（クリックしたときにメニューを出現させる）
  jQuery('.hamburger').click(function(){

    jQuery('.hamburger').toggleClass('active');

    if (jQuery('.hamburger').hasClass('active')) {
        jQuery('.globalMenuSp').addClass('active');
    } else {
        jQuery('.globalMenuSp').removeClass('active');
    }

    if (jQuery('.hamburger').hasClass('active')) {
        jQuery('.globalMenuSp').addClass('active');
    } else {
        jQuery('.globalMenuSp').removeClass('active');
    }

    if (jQuery('.hamburger').hasClass('active')) {
        jQuery('html').addClass('active');
    } else {
        jQuery('html').removeClass('active');
    }

  });


// ホバーアクション：headerのサブカテ出現＆消失
  var header = jQuery("header").find("content").find("div").find("ul").eq(1);
  var content = jQuery("header").find("content");
  var header_bar = jQuery("header").find("content").find("div");

  var bg_img = jQuery("html").find("div").eq(1).find("img");

  var header_li = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").find("a");
  var header_li_1 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(0).find("a");
  var header_li_2 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(1).find("a");
  var header_li_3 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(2).find("a");
  var header_li_4 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(3).find("a");
  var header_li_5 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(4).find("a");
  var header_li_last = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(5).find("a");

  var scr_header_li = jQuery(".header_scroll").find("ul").eq(1).find("li").find("a");
  var scr_header_li_1 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(0).find("a");
  var scr_header_li_2 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(1).find("a");
  var scr_header_li_3 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(2).find("a");
  var scr_header_li_4 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(3).find("a");
  var scr_header_li_5 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(4).find("a");
  var scr_header_li_last = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(5).find("a");

  var main_header_li = jQuery(".header_main_2").find("ul").eq(1).find("li").find("a");
  var main_header_li_1 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(0).find("a");
  var main_header_li_2 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(1).find("a");
  var main_header_li_3 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(2).find("a");
  var main_header_li_4 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(3).find("a");
  var main_header_li_5 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(4).find("a");
  var main_header_li_last = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(5).find("a");

  var ul_1 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(0);
  var ul_2 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(1);
  var ul_3 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(2);
  var ul_4 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(3);
  var ul_5 = jQuery("header").find("content").find("div").find("ul").eq(1).find("li").eq(4);

  var scr_ul_1 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(0);
  var scr_ul_2 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(1);
  var scr_ul_3 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(2);
  var scr_ul_4 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(3);
  var scr_ul_5 = jQuery(".header_scroll").find("ul").eq(1).find("li").eq(4);

  var main_ul_1 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(0);
  var main_ul_2 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(1);
  var main_ul_3 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(2);
  var main_ul_4 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(3);
  var main_ul_5 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(4);

  var sub = jQuery(".header_main_sub").find("ul");
  var sub_1 = jQuery(".header_main_sub").find("ul").eq(0);
  var sub_2 = jQuery(".header_main_sub").find("ul").eq(1);
  var sub_3 = jQuery(".header_main_sub").find("ul").eq(2);
  var sub_4 = jQuery(".header_main_sub").find("ul").eq(3);
  var sub_5 = jQuery(".header_main_sub").find("ul").eq(4);

  var main_2_sub = jQuery(".header_main_sub_2").find("ul");
  var main_2_sub_1 = jQuery(".header_main_sub_2").find("ul").eq(0);
  var main_2_sub_2 = jQuery(".header_main_sub_2").find("ul").eq(1);
  var main_2_sub_3 = jQuery(".header_main_sub_2").find("ul").eq(2);
  var main_2_sub_4 = jQuery(".header_main_sub_2").find("ul").eq(3);
  var main_2_sub_5 = jQuery(".header_main_sub_2").find("ul").eq(4);

  var header_main_2_ul = jQuery(".header_main_2").find("ul");
  var header_main_2_ul_1 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(0);
  var header_main_2_ul_2 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(1);
  var header_main_2_ul_3 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(2);
  var header_main_2_ul_4 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(3);
  var header_main_2_ul_5 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(4);

  var header_main_2_ul_a = jQuery(".header_main_2").find("ul").eq(1).find("li").find("a");
  var header_main_2_ul_a_1 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(0).find("a");
  var header_main_2_ul_a_2 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(1).find("a");
  var header_main_2_ul_a_3 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(2).find("a");
  var header_main_2_ul_a_4 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(3).find("a");
  var header_main_2_ul_a_5 = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(4).find("a");
  var header_main_2_ul_a_last = jQuery(".header_main_2").find("ul").eq(1).find("li").eq(5).find("a");

  jQuery(sub_1).hide();
  jQuery(sub_2).hide();
  jQuery(sub_3).hide();
  jQuery(sub_4).hide();
  jQuery(sub_5).hide(); 

  jQuery(main_2_sub_1).hide();
  jQuery(main_2_sub_2).hide();
  jQuery(main_2_sub_3).hide();
  jQuery(main_2_sub_4).hide();
  jQuery(main_2_sub_5).hide();
  
  function showSubMenu(ul, sub) {
        jQuery(".black").toggleClass('active');
        jQuery(content).css("background-color","#fff");
        jQuery(content).css("box-shadow","unset");
        jQuery(".header_logo").css("filter","invert(0%)");
        jQuery(header_li).css("color","#000000");
        ul.css("color","#1839B1");
        jQuery(header_li_last).css("color","#ffffff");
        sub.fadeIn(200);
    }

    function hideSubMenu(ul, sub) {
        jQuery(".black").removeClass('active');
        jQuery(content).css("background-color","unset");
        jQuery(content).css("box-shadow","0px 40px 60px -24px #777777 inset"); 
        jQuery(".header_logo").css("filter","invert(100%)");
        jQuery(header_li).css("color","#ffffff");
        ul.css("color","#ffffff");
        sub.fadeOut(300);
    }

    // hover時にサブメニューを表示、hoverを外したら非表示
    jQuery(ul_1).hover(function() {
        showSubMenu(jQuery(header_li_1), jQuery(sub_1));
    }, function() {
        hideSubMenu(jQuery(header_li_1), jQuery(sub_1));
    });

    jQuery(ul_2).hover(function() {
        showSubMenu(jQuery(header_li_2), jQuery(sub_2));
    }, function() {
        hideSubMenu(jQuery(header_li_2), jQuery(sub_2));
    });

    jQuery(ul_3).hover(function() {
        showSubMenu(jQuery(header_li_3), jQuery(sub_3));
    }, function() {
        hideSubMenu(jQuery(header_li_3), jQuery(sub_3));
    });

    jQuery(ul_4).hover(function() {
        showSubMenu(jQuery(header_li_4), jQuery(sub_4));
    }, function() {
        hideSubMenu(jQuery(header_li_4), jQuery(sub_4));
    });

    jQuery(ul_5).hover(function() {
        showSubMenu(jQuery(header_li_5), jQuery(sub_5));
    }, function() {
        hideSubMenu(jQuery(header_li_5), jQuery(sub_5));
    });


    function showSubMenuScr(sub, scr_li) {
        jQuery(".black").addClass('active');
        jQuery(content).css("background-color", "#fff");
        jQuery(content).css("box-shadow", "unset");
        jQuery(scr_li).css("color", "#1839B1");
        jQuery(scr_header_li_last).css("color", "#ffffff");
        jQuery(sub).fadeIn(200);
    }

    function hideSubMenuScr(sub, scr_li) {
        jQuery(".black").removeClass('active');
        jQuery(content).css("background-color", "unset");
        jQuery(content).css("box-shadow", "0px 40px 60px -24px #777777 inset");
        jQuery(scr_li).css("color", "#000000");
        jQuery(sub).fadeOut(300);
    }

    function addScrHoverEffect(scr_ul, sub, scr_li) {
        scr_ul.hover(
            function() { showSubMenuScr(sub, scr_li); },
            function() { hideSubMenuScr(sub, scr_li); }
        );
    }

    addScrHoverEffect(scr_ul_1, sub_1, scr_header_li_1);
    addScrHoverEffect(scr_ul_2, sub_2, scr_header_li_2);
    addScrHoverEffect(scr_ul_3, sub_3, scr_header_li_3);
    addScrHoverEffect(scr_ul_4, sub_4, scr_header_li_4);
    addScrHoverEffect(scr_ul_5, sub_5, scr_header_li_5);


    function showMain(main_2_sub, main_li) {
        jQuery(".black").addClass('active');
        jQuery(content).css("background-color", "#fff");
        jQuery(content).css("box-shadow", "unset");
        jQuery(main_li).css("color", "#1839B1");
        jQuery(main_header_li_last).css("color", "#ffffff");
        main_2_sub.fadeIn(200);
    }

    function hideMain(main_2_sub) {
        jQuery(".black").removeClass('active');
        jQuery(header_bar).css("background-color", "#fff");
        jQuery(content).css("box-shadow", "0px 40px 60px -24px #777777 inset");
        jQuery(header_main_2_ul_a).css("color", "#000000");
        jQuery(main_header_li_last).css("color", "#ffffff");
        main_2_sub.fadeOut(300);
    }

    function addScrHoverEffect_2(main_ul, main_2_sub, main_li) {
        main_ul.hover(
            function() { showMain(main_2_sub, main_li); },
            function() { hideMain(main_2_sub); }
        );
    }

    addScrHoverEffect_2(main_ul_1, main_2_sub_1, header_main_2_ul_a_1);
    addScrHoverEffect_2(main_ul_2, main_2_sub_2, header_main_2_ul_a_2);
    addScrHoverEffect_2(main_ul_3, main_2_sub_3, header_main_2_ul_a_3);
    addScrHoverEffect_2(main_ul_4, main_2_sub_4, header_main_2_ul_a_4);
    addScrHoverEffect_2(main_ul_5, main_2_sub_5, header_main_2_ul_a_5);
    
  // サブメニューにカーソルがある場合も表示を維持
    jQuery(sub).hover(function() {
        jQuery(this).stop(true, true).show();
        jQuery(".black").addClass('active');
        jQuery(content).css("background-color","#fff");
        jQuery(content).css("box-shadow","unset");
        jQuery(".header_logo").css("filter","invert(0%)");
        jQuery(header_li).css("color","#000000");
        jQuery(header_li_last).css("color","#ffffff");
    }, function() {
        jQuery(this).fadeOut(300);
        jQuery(".black").removeClass('active');
        jQuery(content).css("background-color","unset");
        jQuery(content).css("box-shadow","0px 40px 60px -24px #777777 inset"); 
        jQuery(".header_logo").css("filter","invert(100%)");
        jQuery(header_li).css("color","#ffffff");
    });

    jQuery(main_2_sub).hover(function() {
        jQuery(this).stop(true, true).show();
        jQuery(".black").addClass('active');
        jQuery(header_bar).css("background-color","#fff");
        jQuery(content).css("box-shadow","unset");
        jQuery(".header_logo").css("filter","invert(0%)");
        jQuery(header_li).css("color","#000000");
        jQuery(header_li_last).css("color","#ffffff");
    }, function() {
        jQuery(this).fadeOut(300);
        jQuery(".black").removeClass('active');
        jQuery(content).css("box-shadow","0px 40px 60px -24px #777777 inset"); 
    });


// クリックアクション：aタグの機能を無効化
  var header_1 = jQuery(".header_main").find("ul").eq(1).find("li").find("a");
  var header_2 = jQuery(".header_main_2").find("ul").eq(1).find("li").find("a");
  var header_3 = jQuery(".header_scroll").find("ul").eq(1).find("li").find("a");

  jQuery(header_1).click(function (event){
    event.preventDefault(); 
  });

  jQuery(header_2).click(function (event){
    event.preventDefault(); 
  });

  jQuery(header_3).click(function (event){
    event.preventDefault(); 
  });


// スクロールアクション：color150出現
  function FixedAnime(){

    var cross_btn_1 = jQuery(".cross_btn").find("span").eq(0);
    var cross_btn_2 = jQuery(".cross_btn").find("span").eq(1);
    var scrollPosition = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();

    
    if (scrollPosition >= 1){
      jQuery(".color150").css("opacity","1");
      jQuery(".color150").css("transform","translateX(0)");
      jQuery(cross_btn_1).css("opacity","1");
      jQuery(cross_btn_1).css("transform","translateX(0) rotate(45deg)");
      jQuery(cross_btn_2).css("opacity","1");
      jQuery(cross_btn_2).css("transform","translateX(0) rotate(135deg)");
    }
  }
      
  jQuery(window).scroll(function(){
    FixedAnime();
  });



// スクロールアクション：header_scroll出現
  function FixedAnime2(){
    
    var header_scroll = jQuery("header").find("article");
    var tops = jQuery("#company-wrapper").offset();
    var scrollPosition = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();

    if (!tops) {

        console.error('#company-wrapper element not found or offset() returned undefined');
        return;

    }else{

        if (scrollPosition >= tops.top){
          jQuery(header_scroll).addClass("is_show");
        }else{
          jQuery(header_scroll).removeClass("is_show"); 
        }

    }
    
  }
      
  jQuery(window).scroll(function(){
    FixedAnime2();
  });



// クリックアクション：img消失
  var color150 = jQuery("#top-wrapper").find("content").find("div").find("nav");

  jQuery(".cross_btn").click(function(){
    jQuery(color150).hide();
  });


// slickアクション：img自動で横スライド
  jQuery('.auto').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    autoplaySpeed: 2000,
    dots: true,
    dotsClass: 'dots-class',
    prevArrow: `<div class="slick-r"><img src="${myTheme.templateUrl}/image/company-wrapper/icon_arrow_next.svg" style="transform: scale(-1, 1);"></div>`,
    nextArrow: `<div class="slick-l"><img src="${myTheme.templateUrl}/image/company-wrapper/icon_arrow_next.svg"></div>`,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: '0px'
  });

  function updateSlick() {
    var windowWidth = jQuery(window).width();
    var itemWidth = 410; // 1つのアイテムの固定幅
    var itemCount = jQuery('.auto').length;
    var slidesToShow = Math.floor(windowWidth / itemWidth);

  // slidesToShowを奇数にし、アイテム数を超えないように調整
    if (slidesToShow % 2 === 0) {
        slidesToShow += 1;
    }
    slidesToShow = Math.min(slidesToShow, itemCount);

    var centerPadding = (windowWidth - slidesToShow * itemWidth) / 2; // 中央パディングを計算

    jQuery('.auto').slick('slickSetOption', {
        slidesToShow: slidesToShow,
        centerPadding: centerPadding + 'px',
        infinite: true // 無限ループを有効にする
    }, true);
  }

// 初期ロード時に設定を更新
    updateSlick();

    // リサイズ時に設定を更新
    jQuery(window).resize(function() {
        updateSlick();
    });

  
  jQuery('.interview_auto').slick({
    slidesToShow: 3.8,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    autoplaySpeed: 2000,
    prevArrow: `<div class="slick-r"><img src="${myTheme.templateUrl}/image/company-wrapper/icon_arrow_next.svg" style="transform: scale(-1, 1);"></div>`,
    nextArrow: `<div class="slick-l"><img src="${myTheme.templateUrl}/image/company-wrapper/icon_arrow_next.svg"></div>`
  });







// hoverアクション：画像を横に拡大＆縮小
    var env_a_1 = jQuery("#env-wrapper").find("content").find("div").find("nav").find("a").eq(0);
    var env_a_2 = jQuery("#env-wrapper").find("content").find("div").find("nav").find("a").eq(1);
    var env_img_1 = jQuery(".env_img_1");
    var env_img_2 = jQuery(".env_img_2");
    var circle_11 = jQuery(".circle_11");
    var circle_12 = jQuery(".circle_12");

    jQuery(env_img_1).hover(function() {
        jQuery(env_a_1).css("width","138%");
        jQuery(circle_11).css("transform","rotate(-45deg)");
    }, function() {
        jQuery(env_a_1).css("width","100%");
        jQuery(circle_11).css("transform","rotate(0deg)");
    });

    jQuery(env_img_2).hover(function() {
        jQuery(env_a_2).css("width","138%");
        jQuery(circle_12).css("transform","rotate(-45deg)");
    }, function() {
        jQuery(env_a_2).css("width","100%");
        jQuery(circle_12).css("transform","rotate(0deg)");
    });




// スクロールアクション：sticky_subの文字変化
  function FixedAnime3(){

    var scrollPosition = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();

    var sub_a_1 = jQuery(".sub_1");
    var sub_a_2 = jQuery(".sub_2");
    var sub_a_3 = jQuery(".sub_3");
    var sub_a_4 = jQuery(".sub_4");
    var sub_a_5 = jQuery(".sub_5");
    var sub_a_6 = jQuery(".sub_6");
    var sub_a_7 = jQuery(".sub_7");
    var sub_a_8 = jQuery(".sub_8");
    var sub_a_9 = jQuery(".sub_9");
    var sub_a_10 = jQuery(".sub_10");
    var sub_a_11 = jQuery(".sub_11");
    var sub_a_12 = jQuery(".sub_12");
    var sub_a_13 = jQuery(".sub_13");
    var sub_a_14 = jQuery(".sub_14");
    var sub_a_15 = jQuery(".sub_15");
    var sub_a_16 = jQuery(".sub_16");
    var sub_a_a = jQuery(".sub_a");
    var sub_a_b = jQuery(".sub_b");
    var sub_a_c = jQuery(".sub_c");
    var sub_a_d = jQuery(".sub_d");
    var sub_a_e = jQuery(".sub_e");
    var sub_a_f = jQuery(".sub_f");
    var sub_a_w = jQuery(".sub_w");
    var sub_a_x = jQuery(".sub_x");
    var sub_a_y = jQuery(".sub_y");
    var sub_a_z = jQuery(".sub_z");

    var sub_li_1 = jQuery(".sub_1").find("li");
    var sub_p_2 = jQuery(".sub_2").find("p");
    var sub_p_3 = jQuery(".sub_3").find("p");
    var sub_li_4 = jQuery(".sub_4").find("li");
    var sub_p_5 = jQuery(".sub_5").find("p");
    var sub_p_6 = jQuery(".sub_6").find("p");
    var sub_li_7 = jQuery(".sub_7").find("li");
    var sub_p_8 = jQuery(".sub_8").find("p");
    var sub_p_9 = jQuery(".sub_9").find("p");
    var sub_li_10 = jQuery(".sub_10").find("li");
    var sub_p_11 = jQuery(".sub_11").find("p");
    var sub_p_12 = jQuery(".sub_12").find("p");
    var sub_li_13 = jQuery(".sub_13").find("li");
    var sub_p_14 = jQuery(".sub_14").find("p");
    var sub_p_15 = jQuery(".sub_15").find("p");
    var sub_li_16 = jQuery(".sub_16").find("li");
    var sub_p_a = jQuery(".sub_a").find("p");
    var sub_p_b = jQuery(".sub_b").find("p");
    var sub_p_c = jQuery(".sub_c").find("p");
    var sub_p_d = jQuery(".sub_d").find("p");
    var sub_p_e = jQuery(".sub_e").find("p");
    var sub_p_f = jQuery(".sub_f").find("p");
    var sub_p_w = jQuery(".sub_w").find("p");
    var sub_p_x = jQuery(".sub_x").find("p");
    var sub_p_y = jQuery(".sub_y").find("p");
    var sub_p_z = jQuery(".sub_z").find("p");

    var sub_span_1 = jQuery(".sub_1").find("li").find("span");
    var sub_span_2 = jQuery(".sub_2").find("p").find("span");
    var sub_span_3 = jQuery(".sub_3").find("p").find("span");
    var sub_span_4 = jQuery(".sub_4").find("li").find("span");
    var sub_span_5 = jQuery(".sub_5").find("p").find("span");
    var sub_span_6 = jQuery(".sub_6").find("p").find("span");
    var sub_span_7 = jQuery(".sub_7").find("li").find("span");
    var sub_span_8 = jQuery(".sub_8").find("p").find("span");
    var sub_span_9 = jQuery(".sub_9").find("p").find("span");
    var sub_span_10 = jQuery(".sub_10").find("li").find("span");
    var sub_span_11 = jQuery(".sub_11").find("p").find("span");
    var sub_span_12 = jQuery(".sub_12").find("p").find("span");
    var sub_span_13 = jQuery(".sub_13").find("li").find("span");
    var sub_span_14 = jQuery(".sub_14").find("p").find("span");
    var sub_span_15 = jQuery(".sub_15").find("p").find("span");
    var sub_span_16 = jQuery(".sub_16").find("li").find("span");
    var sub_span_a = jQuery(".sub_a").find("p").find("span");
    var sub_span_b = jQuery(".sub_b").find("p").find("span");
    var sub_span_c = jQuery(".sub_c").find("p").find("span");
    var sub_span_d = jQuery(".sub_d").find("p").find("span");
    var sub_span_e = jQuery(".sub_e").find("p").find("span");
    var sub_span_f = jQuery(".sub_f").find("p").find("span");
    var sub_span_w = jQuery(".sub_w").find("p").find("span");
    var sub_span_x = jQuery(".sub_x").find("p").find("span");
    var sub_span_y = jQuery(".sub_y").find("p").find("span");
    var sub_span_z = jQuery(".sub_z").find("p").find("span");

    var tops_1 = jQuery(".sticky_main").find("div").eq(0).offset();
    var tops_1_content = jQuery(".sticky_main").find("div").eq(0).find("ul").eq(2).offset();
    var tops_2 = jQuery(".sticky_main").find("div").eq(1).offset();
    var tops_2_content = jQuery(".sticky_main").find("div").eq(1).find("ul").eq(2).offset();
    var tops_3 = jQuery(".sticky_main").find("div").eq(2).offset();
    var tops_3_content = jQuery(".sticky_main").find("div").eq(2).find("ul").eq(2).offset();
    var tops_4 = jQuery(".sticky_main").find("div").eq(3).offset();
    var tops_4_content = jQuery(".sticky_main").find("div").eq(3).find("ul").eq(2).offset();
    var tops_5 = jQuery(".sticky_main").find("div").eq(4).offset();
    var tops_5_content = jQuery(".sticky_main").find("div").eq(4).find("ul").eq(2).offset();
    var tops_last = jQuery(".sticky_main").find("div").eq(5).offset();

    var exist_1 = jQuery(".sticky_main").find("div").eq(3);
    var exist_2 = jQuery(".sticky_main").find("div").eq(4);
    var exist_3 = jQuery(".sticky_main").find("div").eq(5);


if(window.matchMedia("(max-width: 766px)").matches){

  if(jQuery(sub_a_w).length){

  // question用
    if (scrollPosition >= tops_1.top - 180 && scrollPosition <= tops_2.top - 180){
      jQuery(sub_a_w).css("color","#000000");
      jQuery(sub_p_w).css("font-weight","bold");
      jQuery(sub_span_w).css("opacity","1");
    }else{
      jQuery(sub_a_w).css("color","#AAAAAA");
      jQuery(sub_p_w).css("font-weight","100");
      jQuery(sub_span_w).css("opacity","0"); 
    }

    if (scrollPosition >= tops_2.top - 180 && scrollPosition <= tops_3.top - 180){
      jQuery(sub_a_x).css("color","#000000");
      jQuery(sub_p_x).css("font-weight","bold");
      jQuery(sub_span_x).css("opacity","1");
    }else{
      jQuery(sub_a_x).css("color","#AAAAAA");
      jQuery(sub_p_x).css("font-weight","100");
      jQuery(sub_span_x).css("opacity","0"); 
    }

    if (scrollPosition >= tops_3.top - 180 && scrollPosition <= tops_4.top - 180){
      jQuery(sub_a_y).css("color","#000000");
      jQuery(sub_p_y).css("font-weight","bold");
      jQuery(sub_span_y).css("opacity","1");
    }else{
      jQuery(sub_a_y).css("color","#AAAAAA");
      jQuery(sub_p_y).css("font-weight","100");
      jQuery(sub_span_y).css("opacity","0"); 
    }

    if (scrollPosition >= tops_4.top - 180){
      jQuery(sub_a_z).css("color","#000000");
      jQuery(sub_p_z).css("font-weight","bold");
      jQuery(sub_span_z).css("opacity","1");
    }else{
      jQuery(sub_a_z).css("color","#AAAAAA");
      jQuery(sub_p_z).css("font-weight","100");
      jQuery(sub_span_z).css("opacity","0"); 
    }


  }else{

  // デフォルト
    if (scrollPosition >= tops_1.top - 180 && scrollPosition <= tops_2.top - 180){
      jQuery(sub_span_1).css("opacity","1");
    }else{
      jQuery(sub_span_1).css("opacity","0"); 
    }

    if (scrollPosition >= tops_2.top - 180 && scrollPosition <= tops_3.top - 180){
      jQuery(sub_span_4).css("opacity","1");
    }else{
      jQuery(sub_span_4).css("opacity","0"); 
    }


  // test,sales,project用
    if (!(jQuery(exist_1).length)){

        if (scrollPosition >= tops_3.top - 180){
          jQuery(sub_span_7).css("opacity","1");
        }else{
          jQuery(sub_span_7).css("opacity","0"); 
        }

    }else{

        if (scrollPosition >= tops_3.top - 180 && scrollPosition <= tops_4.top - 180){
          jQuery(sub_span_7).css("opacity","1");
        }else{
          jQuery(sub_span_7).css("opacity","0"); 
        }

    }


  // service用
    if (jQuery(exist_2).length && !(jQuery(exist_3).length)){

        if (scrollPosition >= tops_4.top - 180 && scrollPosition <= tops_5.top - 180){
          jQuery(sub_span_10).css("opacity","1");
        }else{
          jQuery(sub_span_10).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5.top - 180){
          jQuery(sub_span_13).css("opacity","1");
        }else{
          jQuery(sub_span_13).css("opacity","0"); 
        }

    }else{

        if (scrollPosition >= tops_4.top - 180){
          jQuery(sub_span_10).css("opacity","1");
        }else{
          jQuery(sub_span_10).css("opacity","0"); 
        } 
    }


  // it用
    if (jQuery(exist_3).length){

        if (scrollPosition >= tops_4.top - 180 && scrollPosition <= tops_5.top - 180){
          jQuery(sub_span_10).css("opacity","1");
        }else{
          jQuery(sub_span_10).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5.top - 180 && scrollPosition <= tops_last.top - 180){
          jQuery(sub_span_13).css("opacity","1");
        }else{
          jQuery(sub_span_13).css("opacity","0"); 
        }

        if (scrollPosition >= tops_last.top - 180){
          jQuery(sub_span_16).css("opacity","1");
        }else{
          jQuery(sub_span_16).css("opacity","0"); 
        }

    // welfare用
        if (scrollPosition >= tops_1.top - 180 && scrollPosition <= tops_2.top - 180){
          jQuery(sub_a_a).css("color","#000000");
          jQuery(sub_p_a).css("font-weight","bold");
          jQuery(sub_span_a).css("opacity","1");
        }else{
          jQuery(sub_a_a).css("color","#AAAAAA");
          jQuery(sub_p_a).css("font-weight","100");
          jQuery(sub_span_a).css("opacity","0"); 
        }

        if (scrollPosition >= tops_2.top - 180 && scrollPosition <= tops_3.top - 180){
          jQuery(sub_a_b).css("color","#000000");
          jQuery(sub_p_b).css("font-weight","bold");
          jQuery(sub_span_b).css("opacity","1");
        }else{
          jQuery(sub_a_b).css("color","#AAAAAA");
          jQuery(sub_p_b).css("font-weight","100");
          jQuery(sub_span_b).css("opacity","0"); 
        }

        if (scrollPosition >= tops_3.top - 180 && scrollPosition <= tops_4.top - 180){
          jQuery(sub_a_c).css("color","#000000");
          jQuery(sub_p_c).css("font-weight","bold");
          jQuery(sub_span_c).css("opacity","1");
        }else{
          jQuery(sub_a_c).css("color","#AAAAAA");
          jQuery(sub_p_c).css("font-weight","100");
          jQuery(sub_span_c).css("opacity","0"); 
        }

        if (scrollPosition >= tops_4.top - 180 && scrollPosition <= tops_5.top - 180){
          jQuery(sub_a_d).css("color","#000000");
          jQuery(sub_p_d).css("font-weight","bold");
          jQuery(sub_span_d).css("opacity","1");
        }else{
          jQuery(sub_a_d).css("color","#AAAAAA");
          jQuery(sub_p_d).css("font-weight","100");
          jQuery(sub_span_d).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5.top - 180 && scrollPosition <= tops_last.top - 180){
          jQuery(sub_a_e).css("color","#000000");
          jQuery(sub_p_e).css("font-weight","bold");
          jQuery(sub_span_e).css("opacity","1");
        }else{
          jQuery(sub_a_e).css("color","#AAAAAA");
          jQuery(sub_p_e).css("font-weight","100");
          jQuery(sub_span_e).css("opacity","0"); 
        }

        if (scrollPosition >= tops_last.top - 180){
          jQuery(sub_a_f).css("color","#000000");
          jQuery(sub_p_f).css("font-weight","bold");
          jQuery(sub_span_f).css("opacity","1");
        }else{
          jQuery(sub_a_f).css("color","#AAAAAA");
          jQuery(sub_p_f).css("font-weight","100");
          jQuery(sub_span_f).css("opacity","0"); 
        }

    }else{

        if (scrollPosition >= tops_5.top - 180){
          jQuery(sub_span_13).css("opacity","1");
        }else{
          jQuery(sub_span_13).css("opacity","0"); 
        } 

    }
  }
  
}else{

  if(jQuery(sub_a_w).length){

  // question用
    if (scrollPosition >= tops_1.top - 180 && scrollPosition <= tops_2.top - 180){
      jQuery(sub_a_w).css("color","#000000");
      jQuery(sub_p_w).css("font-weight","bold");
      jQuery(sub_span_w).css("opacity","1");
    }else{
      jQuery(sub_a_w).css("color","#AAAAAA");
      jQuery(sub_p_w).css("font-weight","100");
      jQuery(sub_span_w).css("opacity","0"); 
    }

    if (scrollPosition >= tops_2.top - 180 && scrollPosition <= tops_3.top - 180){
      jQuery(sub_a_x).css("color","#000000");
      jQuery(sub_p_x).css("font-weight","bold");
      jQuery(sub_span_x).css("opacity","1");
    }else{
      jQuery(sub_a_x).css("color","#AAAAAA");
      jQuery(sub_p_x).css("font-weight","100");
      jQuery(sub_span_x).css("opacity","0"); 
    }

    if (scrollPosition >= tops_3.top - 180 && scrollPosition <= tops_4.top - 180){
      jQuery(sub_a_y).css("color","#000000");
      jQuery(sub_p_y).css("font-weight","bold");
      jQuery(sub_span_y).css("opacity","1");
    }else{
      jQuery(sub_a_y).css("color","#AAAAAA");
      jQuery(sub_p_y).css("font-weight","100");
      jQuery(sub_span_y).css("opacity","0"); 
    }

    if (scrollPosition >= tops_4.top - 180){
      jQuery(sub_a_z).css("color","#000000");
      jQuery(sub_p_z).css("font-weight","bold");
      jQuery(sub_span_z).css("opacity","1");
    }else{
      jQuery(sub_a_z).css("color","#AAAAAA");
      jQuery(sub_p_z).css("font-weight","100");
      jQuery(sub_span_z).css("opacity","0"); 
    }


  }else{

  // デフォルト
    if (scrollPosition >= tops_1.top - 180 && scrollPosition <= tops_1_content.top - 380){
      jQuery(sub_span_1).css("opacity","1");
    }else{
      jQuery(sub_span_1).css("opacity","0"); 
    }

    if (scrollPosition >= tops_1_content.top - 380 && scrollPosition <= tops_1_content.top + 100){
      jQuery(sub_a_2).css("color","#000000");
      jQuery(sub_p_2).css("font-weight","bold");
      jQuery(sub_span_2).css("opacity","1");
    }else{
      jQuery(sub_a_2).css("color","#AAAAAA");
      jQuery(sub_p_2).css("font-weight","100");
      jQuery(sub_span_2).css("opacity","0"); 
    }

    if (scrollPosition >= tops_1_content.top + 100 && scrollPosition <= tops_2.top - 180){
      jQuery(sub_a_3).css("color","#000000");
      jQuery(sub_p_3).css("font-weight","bold");
      jQuery(sub_span_3).css("opacity","1");
    }else{
      jQuery(sub_a_3).css("color","#AAAAAA");
      jQuery(sub_p_3).css("font-weight","100");
      jQuery(sub_span_3).css("opacity","0"); 
    }

    if (scrollPosition >= tops_2.top - 180 && scrollPosition <= tops_2_content.top - 400){
      jQuery(sub_span_4).css("opacity","1");
    }else{
      jQuery(sub_span_4).css("opacity","0"); 
    }

    if (scrollPosition >= tops_2_content.top - 400 && scrollPosition <= tops_2_content.top + 100){
      jQuery(sub_a_5).css("color","#000000");
      jQuery(sub_p_5).css("font-weight","bold");
      jQuery(sub_span_5).css("opacity","1");
    }else{
      jQuery(sub_a_5).css("color","#AAAAAA");
      jQuery(sub_p_5).css("font-weight","100");
      jQuery(sub_span_5).css("opacity","0"); 
    }

    if (scrollPosition >= tops_2_content.top + 100 && scrollPosition <= tops_3.top - 180){
      jQuery(sub_a_6).css("color","#000000");
      jQuery(sub_p_6).css("font-weight","bold");
      jQuery(sub_span_6).css("opacity","1");
    }else{
      jQuery(sub_a_6).css("color","#AAAAAA");
      jQuery(sub_p_6).css("font-weight","100");
      jQuery(sub_span_6).css("opacity","0"); 
    }


  // test,sales,project用
    if (!(jQuery(exist_1).length)){

        if (scrollPosition >= tops_3.top - 180){
          jQuery(sub_span_7).css("opacity","1");
        }else{
          jQuery(sub_span_7).css("opacity","0"); 
        }

    }else{

        if (scrollPosition >= tops_3.top - 180 && scrollPosition <= tops_3_content.top - 400){
          jQuery(sub_span_7).css("opacity","1");
        }else{
          jQuery(sub_span_7).css("opacity","0"); 
        }

    }

    if (scrollPosition >= tops_3_content.top - 400 && scrollPosition <= tops_3_content.top + 100){
      jQuery(sub_a_8).css("color","#000000");
      jQuery(sub_p_8).css("font-weight","bold");
      jQuery(sub_span_8).css("opacity","1");
    }else{
      jQuery(sub_a_8).css("color","#AAAAAA");
      jQuery(sub_p_8).css("font-weight","100");
      jQuery(sub_span_8).css("opacity","0"); 
    }

    if (scrollPosition >= tops_3_content.top + 100 && scrollPosition <= tops_4.top - 180){
      jQuery(sub_a_9).css("color","#000000");
      jQuery(sub_p_9).css("font-weight","bold");
      jQuery(sub_span_9).css("opacity","1");
    }else{
      jQuery(sub_a_9).css("color","#AAAAAA");
      jQuery(sub_p_9).css("font-weight","100");
      jQuery(sub_span_9).css("opacity","0"); 
    }


  // service用
    if (jQuery(exist_2).length && !(jQuery(exist_3).length)){

        if (scrollPosition >= tops_4.top - 180 && scrollPosition <= tops_4_content.top - 400){
          jQuery(sub_span_10).css("opacity","1");
        }else{
          jQuery(sub_span_10).css("opacity","0"); 
        }

        if (scrollPosition >= tops_4_content.top - 400 && scrollPosition <= tops_4_content.top + 100){
          jQuery(sub_a_11).css("color","#000000");
          jQuery(sub_p_11).css("font-weight","bold");
          jQuery(sub_span_11).css("opacity","1");
        }else{
          jQuery(sub_a_11).css("color","#AAAAAA");
          jQuery(sub_p_11).css("font-weight","100");
          jQuery(sub_span_11).css("opacity","0"); 
        }

        if (scrollPosition >= tops_4_content.top + 100 && scrollPosition <= tops_5.top - 180){
          jQuery(sub_a_12).css("color","#000000");
          jQuery(sub_p_12).css("font-weight","bold");
          jQuery(sub_span_12).css("opacity","1");
        }else{
          jQuery(sub_a_12).css("color","#AAAAAA");
          jQuery(sub_p_12).css("font-weight","100");
          jQuery(sub_span_12).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5.top - 180){
          jQuery(sub_span_13).css("opacity","1");
        }else{
          jQuery(sub_span_13).css("opacity","0"); 
        }

    }else{

        if (scrollPosition >= tops_4.top - 180){
          jQuery(sub_span_10).css("opacity","1");
        }else{
          jQuery(sub_span_10).css("opacity","0"); 
        } 
    }


  // it用
    if (jQuery(exist_3).length){

        if (scrollPosition >= tops_4.top - 180 && scrollPosition <= tops_4_content.top - 400){
          jQuery(sub_span_10).css("opacity","1");
        }else{
          jQuery(sub_span_10).css("opacity","0"); 
        }

        if (scrollPosition >= tops_4_content.top - 400 && scrollPosition <= tops_4_content.top + 100){
          jQuery(sub_a_11).css("color","#000000");
          jQuery(sub_p_11).css("font-weight","bold");
          jQuery(sub_span_11).css("opacity","1");
        }else{
          jQuery(sub_a_11).css("color","#AAAAAA");
          jQuery(sub_p_11).css("font-weight","100");
          jQuery(sub_span_11).css("opacity","0"); 
        }

        if (scrollPosition >= tops_4_content.top + 100 && scrollPosition <= tops_5.top - 180){
          jQuery(sub_a_12).css("color","#000000");
          jQuery(sub_p_12).css("font-weight","bold");
          jQuery(sub_span_12).css("opacity","1");
        }else{
          jQuery(sub_a_12).css("color","#AAAAAA");
          jQuery(sub_p_12).css("font-weight","100");
          jQuery(sub_span_12).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5.top - 180){
          jQuery(sub_span_13).css("opacity","1");
        }else{
          jQuery(sub_span_13).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5.top - 180 && scrollPosition <= tops_5_content.top - 400){
          jQuery(sub_span_13).css("opacity","1");
        }else{
          jQuery(sub_span_13).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5_content.top - 400 && scrollPosition <= tops_5_content.top + 100){
          jQuery(sub_a_14).css("color","#000000");
          jQuery(sub_p_14).css("font-weight","bold");
          jQuery(sub_span_14).css("opacity","1");
        }else{
          jQuery(sub_a_14).css("color","#AAAAAA");
          jQuery(sub_p_14).css("font-weight","100");
          jQuery(sub_span_14).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5_content.top + 100 && scrollPosition <= tops_last.top - 180){
          jQuery(sub_a_15).css("color","#000000");
          jQuery(sub_p_15).css("font-weight","bold");
          jQuery(sub_span_15).css("opacity","1");
        }else{
          jQuery(sub_a_15).css("color","#AAAAAA");
          jQuery(sub_p_15).css("font-weight","100");
          jQuery(sub_span_15).css("opacity","0"); 
        }

        if (scrollPosition >= tops_last.top - 180){
          jQuery(sub_span_16).css("opacity","1");
        }else{
          jQuery(sub_span_16).css("opacity","0"); 
        }

    // welfare用
        if (scrollPosition >= tops_1.top - 180 && scrollPosition <= tops_2.top - 180){
          jQuery(sub_a_a).css("color","#000000");
          jQuery(sub_p_a).css("font-weight","bold");
          jQuery(sub_span_a).css("opacity","1");
        }else{
          jQuery(sub_a_a).css("color","#AAAAAA");
          jQuery(sub_p_a).css("font-weight","100");
          jQuery(sub_span_a).css("opacity","0"); 
        }

        if (scrollPosition >= tops_2.top - 180 && scrollPosition <= tops_3.top - 180){
          jQuery(sub_a_b).css("color","#000000");
          jQuery(sub_p_b).css("font-weight","bold");
          jQuery(sub_span_b).css("opacity","1");
        }else{
          jQuery(sub_a_b).css("color","#AAAAAA");
          jQuery(sub_p_b).css("font-weight","100");
          jQuery(sub_span_b).css("opacity","0"); 
        }

        if (scrollPosition >= tops_3.top - 180 && scrollPosition <= tops_4.top - 180){
          jQuery(sub_a_c).css("color","#000000");
          jQuery(sub_p_c).css("font-weight","bold");
          jQuery(sub_span_c).css("opacity","1");
        }else{
          jQuery(sub_a_c).css("color","#AAAAAA");
          jQuery(sub_p_c).css("font-weight","100");
          jQuery(sub_span_c).css("opacity","0"); 
        }

        if (scrollPosition >= tops_4.top - 180 && scrollPosition <= tops_5.top - 180){
          jQuery(sub_a_d).css("color","#000000");
          jQuery(sub_p_d).css("font-weight","bold");
          jQuery(sub_span_d).css("opacity","1");
        }else{
          jQuery(sub_a_d).css("color","#AAAAAA");
          jQuery(sub_p_d).css("font-weight","100");
          jQuery(sub_span_d).css("opacity","0"); 
        }

        if (scrollPosition >= tops_5.top - 180 && scrollPosition <= tops_last.top - 180){
          jQuery(sub_a_e).css("color","#000000");
          jQuery(sub_p_e).css("font-weight","bold");
          jQuery(sub_span_e).css("opacity","1");
        }else{
          jQuery(sub_a_e).css("color","#AAAAAA");
          jQuery(sub_p_e).css("font-weight","100");
          jQuery(sub_span_e).css("opacity","0"); 
        }

        if (scrollPosition >= tops_last.top - 180){
          jQuery(sub_a_f).css("color","#000000");
          jQuery(sub_p_f).css("font-weight","bold");
          jQuery(sub_span_f).css("opacity","1");
        }else{
          jQuery(sub_a_f).css("color","#AAAAAA");
          jQuery(sub_p_f).css("font-weight","100");
          jQuery(sub_span_f).css("opacity","0"); 
        }


    }else{

        if (scrollPosition >= tops_5.top - 180){
          jQuery(sub_span_13).css("opacity","1");
        }else{
          jQuery(sub_span_13).css("opacity","0"); 
        } 

    }

  }

}


  

}
      
jQuery(window).scroll(function(){
    FixedAnime3();
});



// クリックアクション：要素の位置に移動
    var sub_a_1 = jQuery(".sub_1");
    var sub_a_2 = jQuery(".sub_2");
    var sub_a_3 = jQuery(".sub_3");
    var sub_a_4 = jQuery(".sub_4");
    var sub_a_5 = jQuery(".sub_5");
    var sub_a_6 = jQuery(".sub_6");
    var sub_a_7 = jQuery(".sub_7");
    var sub_a_8 = jQuery(".sub_8");
    var sub_a_9 = jQuery(".sub_9");
    var sub_a_10 = jQuery(".sub_10");
    var sub_a_11 = jQuery(".sub_11");
    var sub_a_12 = jQuery(".sub_12");
    var sub_a_13 = jQuery(".sub_13");
    var sub_a_14 = jQuery(".sub_14");
    var sub_a_15 = jQuery(".sub_15");
    var sub_a_16 = jQuery(".sub_16");
    var sub_a_a = jQuery(".sub_a");
    var sub_a_b = jQuery(".sub_b");
    var sub_a_c = jQuery(".sub_c");
    var sub_a_d = jQuery(".sub_d");
    var sub_a_e = jQuery(".sub_e");
    var sub_a_f = jQuery(".sub_f");
    var sub_a_w = jQuery(".sub_w");
    var sub_a_x = jQuery(".sub_x");
    var sub_a_y = jQuery(".sub_y");
    var sub_a_z = jQuery(".sub_z");
    var office_env_1 = jQuery(".header_main_sub").find("ul").eq(3).find("li").eq(1).find("a");
    var office_env_2 = jQuery(".header_main_sub_2").find("ul").eq(3).find("li").eq(1).find("a");

    var tops_1 = jQuery(".sticky_main").find("div").eq(0).offset();
    var tops_1_content = jQuery(".sticky_main").find("div").eq(0).find("ul").eq(1).offset();
    var tops_1_recruit = jQuery(".sticky_main").find("div").eq(0).find("ul").eq(3).offset();
    var tops_2 = jQuery(".sticky_main").find("div").eq(1).offset();
    var tops_2_content = jQuery(".sticky_main").find("div").eq(1).find("ul").eq(1).offset();
    var tops_2_recruit = jQuery(".sticky_main").find("div").eq(1).find("ul").eq(3).offset();
    var tops_3 = jQuery(".sticky_main").find("div").eq(2).offset();
    var tops_3_content = jQuery(".sticky_main").find("div").eq(2).find("ul").eq(1).offset();
    var tops_3_recruit = jQuery(".sticky_main").find("div").eq(2).find("ul").eq(3).offset();
    var tops_4 = jQuery(".sticky_main").find("div").eq(3).offset();
    var tops_4_content = jQuery(".sticky_main").find("div").eq(3).find("ul").eq(1).offset();
    var tops_4_recruit = jQuery(".sticky_main").find("div").eq(3).find("ul").eq(3).offset();
    var tops_5 = jQuery(".sticky_main").find("div").eq(4).offset();
    var tops_5_content = jQuery(".sticky_main").find("div").eq(4).find("ul").eq(1).offset();
    var tops_5_recruit = jQuery(".sticky_main").find("div").eq(4).find("ul").eq(3).offset();
    var tops_last = jQuery(".sticky_main").find("div").eq(5).offset();

if(window.matchMedia("(max-width: 1140px)").matches){

  jQuery(".env_scroll_1").click(function (event){
    event.preventDefault(); 
    jQuery('html.active').toggleClass('exc_office_1');

    if (jQuery('html.active').hasClass('exc_office_1')) {
        jQuery('html.active').addClass('exc_office_1');
    } else {
        jQuery('html.active').removeClass('exc_office_1');
    }

    jQuery('nav.globalMenuSp').toggleClass('exc_office_2');

    if (jQuery('nav.globalMenuSp').hasClass('exc_office_2')) {
        jQuery('nav.globalMenuSp').addClass('exc_office_2');
    } else {
        jQuery('nav.globalMenuSp').removeClass('exc_office_2');
    }

    jQuery('html, body').animate({
      scrollTop: tops_last.top - 150 }); 
  });

}    


if(window.matchMedia("(max-width: 766px)").matches){
  // ウィンドウサイズが 766px以下の場合

   jQuery(sub_a_1).click(function (event){
    event.preventDefault(); // aタグの動作を無効化
    jQuery('html, body').animate({
      scrollTop: tops_1.top - 150 }); 
  });

  jQuery(sub_a_4).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_2.top - 150 }); 
  });

  jQuery(sub_a_7).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_3.top - 150 }); 
  });

  jQuery(sub_a_10).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_4.top - 150 }); 
  });

  jQuery(sub_a_13).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_5.top - 150 }); 
  });

  jQuery(sub_a_16).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_last.top - 150 }); 
  });

  jQuery(sub_a_a).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_1.top - 150 }); 
  });

  jQuery(sub_a_b).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_2.top - 150 }); 
  });

  jQuery(sub_a_c).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_3.top - 150 }); 
  });

  jQuery(sub_a_d).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_4.top - 150 }); 
  });

  jQuery(sub_a_e).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_5.top - 150 }); 
  });

  jQuery(sub_a_f).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_last.top - 150 }); 
  });

  jQuery(sub_a_w).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_1.top - 150 }); 
  });

  jQuery(sub_a_x).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_2.top - 150 }); 
  });

  jQuery(sub_a_y).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_3.top - 150 }); 
  });

  jQuery(sub_a_z).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_4.top - 150 }); 
  });

  jQuery(".env_scroll_1").click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_last.top - 150 }); 
  });

}else{ 

  jQuery(sub_a_1).click(function (event){
    event.preventDefault(); // aタグの動作を無効化
    jQuery('html, body').animate({
      scrollTop: tops_1.top - 90 }); 
  });

  jQuery(sub_a_2).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_1_content.top - 50 }); 
  });

  jQuery(sub_a_3).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_1_recruit.top - 50 }); 
  });

  jQuery(sub_a_4).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_2.top - 90 }); 
  });

  jQuery(sub_a_5).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_2_content.top - 50 }); 
  });

  jQuery(sub_a_6).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_2_recruit.top - 50 }); 
  });

  jQuery(sub_a_7).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_3.top - 90 }); 
  });

  jQuery(sub_a_8).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_3_content.top - 50 }); 
  });

  jQuery(sub_a_9).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_3_recruit.top - 50 }); 
  });

  jQuery(sub_a_10).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_4.top - 90 }); 
  });

  jQuery(sub_a_11).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_4_content.top - 50 }); 
  });

  jQuery(sub_a_12).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_4_recruit.top - 50 }); 
  });

  jQuery(sub_a_13).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_5.top - 90 }); 
  });

  jQuery(sub_a_14).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_5_content.top - 50 }); 
  });

  jQuery(sub_a_15).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_5_recruit.top - 50 }); 
  });

  jQuery(sub_a_16).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_last.top - 90 }); 
  });

  jQuery(sub_a_a).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_1.top - 90 }); 
  });

  jQuery(sub_a_b).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_2.top - 90 }); 
  });

  jQuery(sub_a_c).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_3.top - 90 }); 
  });

  jQuery(sub_a_d).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_4.top - 90 }); 
  });

  jQuery(sub_a_e).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_5.top - 90 }); 
  });

  jQuery(sub_a_f).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_last.top - 90 }); 
  });

  jQuery(sub_a_w).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_1.top - 90 }); 
  });

  jQuery(sub_a_x).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_2.top - 90 }); 
  });

  jQuery(sub_a_y).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_3.top - 90 }); 
  });

  jQuery(sub_a_z).click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_4.top - 90 }); 
  });

  jQuery(".env_scroll_1").click(function (event){
    event.preventDefault(); 
    jQuery('html, body').animate({
      scrollTop: tops_last.top - 90 }); 
  });  
       
}

 
jQuery(document).ready(function() {
  var hash = window.location.hash;

  if (hash) {
    // ハッシュからターゲットIDを取得
    var targetId = hash.substring(1);
    var jQuerytargetElement = jQuery('#' + targetId);

    if (jQuerytargetElement.length) {

      var targetOffset = jQuerytargetElement.offset();

      jQuery('html, body').animate({
        scrollTop: targetOffset.top - 90});
    }
  }
});


// クリックアクション：aタグを上から出現
  jQuery(".position_ex_1").hide();
  jQuery(".position_ex_2").hide();
  jQuery(".position_ex_3").hide();

  jQuery(".add_btn").click(function (){
      jQuery(".position_ex_1").slideDown(300);
      jQuery(".position_ex_2").slideDown(310);
      jQuery(".position_ex_3").slideDown(320);
      jQuery(".add_btn").hide(310);
  });



// クリックアクション：aタグの中身要素を上から出現
  var que_selection_a_1 = jQuery(".sticky_selection").find("ul").find("a").eq(0);
  var que_selection_a_2 = jQuery(".sticky_selection").find("ul").find("a").eq(1);
  var que_qualification_a_1 = jQuery(".sticky_qualification").find("ul").find("a").eq(0);
  var que_qualification_a_2 = jQuery(".sticky_qualification").find("ul").find("a").eq(1);
  var que_qualification_a_3 = jQuery(".sticky_qualification").find("ul").find("a").eq(2);
  var que_howtowork_a_1 = jQuery(".sticky_howtowork").find("ul").find("a").eq(0);
  var que_howtowork_a_2 = jQuery(".sticky_howtowork").find("ul").find("a").eq(1);
  var que_howtowork_a_3 = jQuery(".sticky_howtowork").find("ul").find("a").eq(2);
  var que_howtowork_a_4 = jQuery(".sticky_howtowork").find("ul").find("a").eq(3);
  var que_howtowork_a_5 = jQuery(".sticky_howtowork").find("ul").find("a").eq(4);
  var que_howtowork_a_6 = jQuery(".sticky_howtowork").find("ul").find("a").eq(5);
  var que_howtowork_a_7 = jQuery(".sticky_howtowork").find("ul").find("a").eq(6);
  var que_welfare_a_1 = jQuery(".sticky_welfare").find("ul").find("a").eq(0);
  var que_welfare_a_2 = jQuery(".sticky_welfare").find("ul").find("a").eq(1);
  var que_welfare_a_3 = jQuery(".sticky_welfare").find("ul").find("a").eq(2);
  var que_welfare_a_4 = jQuery(".sticky_welfare").find("ul").find("a").eq(3);
  var que_welfare_a_5 = jQuery(".sticky_welfare").find("ul").find("a").eq(4);
  var que_welfare_a_6 = jQuery(".sticky_welfare").find("ul").find("a").eq(5);

  jQuery(que_selection_a_1).click(function (event){
    event.preventDefault(); 
    jQuery(".question_1").slideToggle();
    jQuery(".tri_6_1").toggleClass("turn");
  });

  jQuery(que_selection_a_2).click(function (event){
    event.preventDefault(); 
    jQuery(".question_2").slideToggle();
    jQuery(".tri_6_2").toggleClass("turn");
  });

  jQuery(que_qualification_a_1).click(function (event){
    event.preventDefault(); 
    jQuery(".question_3").slideToggle();
    jQuery(".tri_6_3").toggleClass("turn");
  });

  jQuery(que_qualification_a_2).click(function (event){
    event.preventDefault(); 
    jQuery(".question_4").slideToggle();
    jQuery(".tri_6_4").toggleClass("turn");
  });

  jQuery(que_qualification_a_3).click(function (event){
    event.preventDefault(); 
    jQuery(".question_5").slideToggle();
    jQuery(".tri_6_5").toggleClass("turn");
  });

  jQuery(que_howtowork_a_1).click(function (event){
    event.preventDefault(); 
    jQuery(".question_6").slideToggle();
    jQuery(".tri_6_6").toggleClass("turn");
  });

  jQuery(que_howtowork_a_2).click(function (event){
    event.preventDefault(); 
    jQuery(".question_7").slideToggle();
    jQuery(".tri_6_7").toggleClass("turn");
  });

  jQuery(que_howtowork_a_3).click(function (event){
    event.preventDefault(); 
    jQuery(".question_8").slideToggle();
    jQuery(".tri_6_8").toggleClass("turn");
  });

  jQuery(que_howtowork_a_4).click(function (event){
    event.preventDefault(); 
    jQuery(".question_9").slideToggle();
    jQuery(".tri_6_9").toggleClass("turn");
  });

  jQuery(que_howtowork_a_5).click(function (event){
    event.preventDefault(); 
    jQuery(".question_10").slideToggle();
    jQuery(".tri_6_10").toggleClass("turn");
  });

  jQuery(que_howtowork_a_6).click(function (event){
    event.preventDefault(); 
    jQuery(".question_11").slideToggle();
    jQuery(".tri_6_11").toggleClass("turn");
  });

  jQuery(que_howtowork_a_7).click(function (event){
    event.preventDefault(); 
    jQuery(".question_12").slideToggle();
    jQuery(".tri_6_12").toggleClass("turn");
  });

  jQuery(que_welfare_a_1).click(function (event){
    event.preventDefault(); 
    jQuery(".question_13").slideToggle();
    jQuery(".tri_6_13").toggleClass("turn");
  });

  jQuery(que_welfare_a_2).click(function (event){
    event.preventDefault(); 
    jQuery(".question_14").slideToggle();
    jQuery(".tri_6_14").toggleClass("turn");
  });

  jQuery(que_welfare_a_3).click(function (event){
    event.preventDefault(); 
    jQuery(".question_15").slideToggle();
    jQuery(".tri_6_15").toggleClass("turn");
  });

  jQuery(que_welfare_a_4).click(function (event){
    event.preventDefault(); 
    jQuery(".question_16").slideToggle();
    jQuery(".tri_6_16").toggleClass("turn");
  });

  jQuery(que_welfare_a_5).click(function (event){
    event.preventDefault(); 
    jQuery(".question_17").slideToggle();
    jQuery(".tri_6_17").toggleClass("turn");
  });

  jQuery(que_welfare_a_6).click(function (event){
    event.preventDefault(); 
    jQuery(".question_18").slideToggle();
    jQuery(".tri_6_18").toggleClass("turn");
  });


  var ham_h4_1 = jQuery(".ham_list_1").find("nav").find("h4");
  var ham_h4_2 = jQuery(".ham_list_2").find("nav").find("h4");
  var ham_h4_3 = jQuery(".ham_list_3").find("nav").find("h4");
  var ham_h4_4 = jQuery(".ham_list_4").find("nav").find("h4");
  var ham_h4_5 = jQuery(".ham_list_5").find("nav").find("h4");

  jQuery(ham_h4_1).click(function(){
    jQuery(".list_1").slideToggle();
    jQuery(".tri_7_1").toggleClass("turn");
  });

  jQuery(ham_h4_2).click(function(){
    jQuery(".list_2").slideToggle();
    jQuery(".tri_7_2").toggleClass("turn");
  });

  jQuery(ham_h4_3).click(function(){
    jQuery(".list_3").slideToggle();
    jQuery(".tri_7_3").toggleClass("turn");
  });

  jQuery(ham_h4_4).click(function(){
    jQuery(".list_4").slideToggle();
    jQuery(".tri_7_4").toggleClass("turn");
  });

  jQuery(ham_h4_5).click(function(){
    jQuery(".list_5").slideToggle();
    jQuery(".tri_7_5").toggleClass("turn");
  });


  var footer_h4_1 = jQuery(".footer_list_1").find("nav").find("h4");
  var footer_h4_2 = jQuery(".footer_list_2").find("nav").find("h4");
  var footer_h4_3 = jQuery(".footer_list_3").find("nav").find("h4");
  var footer_h4_4 = jQuery(".footer_list_4").find("nav").find("h4");
  var footer_h4_5 = jQuery(".footer_list_5").find("nav").find("h4");

  jQuery(footer_h4_1).click(function(){
    jQuery(".f_list_1").slideToggle();
    jQuery(".tri_9_1").toggleClass("turn");
  });

  jQuery(footer_h4_2).click(function(){
    jQuery(".f_list_2").slideToggle();
    jQuery(".tri_9_2").toggleClass("turn");
  });

  jQuery(footer_h4_3).click(function(){
    jQuery(".f_list_3").slideToggle();
    jQuery(".tri_9_3").toggleClass("turn");
  });

  jQuery(footer_h4_4).click(function(){
    jQuery(".f_list_4").slideToggle();
    jQuery(".tri_9_4").toggleClass("turn");
  });

  jQuery(footer_h4_5).click(function(){
    jQuery(".f_list_5").slideToggle();
    jQuery(".tri_9_5").toggleClass("turn");
  });




});