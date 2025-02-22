jQuery(document).ready(function(){


// ハンバーガーメニュー（クリックしたときにメニューを出現させる）
  var ham_sec = jQuery(".hamburger_second");

  jQuery('.hamburger').click(function(){
    jQuery(ham_sec).toggleClass('active');

    if (jQuery(ham_sec).hasClass('active')) {
        jQuery('.globalMenuSp').addClass('active');
    } else {
        jQuery('.globalMenuSp').removeClass('active');
    }
  });

    jQuery(ham_sec).click(function(){
    jQuery(ham_sec).toggleClass('active');

    if (jQuery(ham_sec).hasClass('active')) {
        jQuery('.globalMenuSp').addClass('active');
    } else {
        jQuery('.globalMenuSp').removeClass('active');
    }
  });
// ハンバーガーメニュー（クリックしたときにメニューを出現させる）   
　　

// ハンバーガーメニュー（クリックしたときにメニューを出現させる） 私たちについて
　var ham_trd = jQuery(".hamburger_third");


  jQuery('.hamburger-2').click(function(){
    jQuery(ham_trd).toggleClass('active');

    if (jQuery(ham_trd).hasClass('active')) {
        jQuery('.globalMenuSp').addClass('active');
    } else {
        jQuery('.globalMenuSp').removeClass('active');
    }
  });

  jQuery(ham_trd).click(function(){
    jQuery(ham_trd).toggleClass('active');

    if (jQuery(ham_trd).hasClass('active')) {
        jQuery('.globalMenuSp').addClass('active');
    } else {
        jQuery('.globalMenuSp').removeClass('active');
    }
  });
// ハンバーガーメニュー（クリックしたときにメニューを出現させる） 私たちについて


// 画面ローディング
  jQuery('#loading').delay(1500).queue(function() {
      jQuery(this).addClass('loaded').dequeue();
  });
// 画面ローディング


// カーソルを当てた時にのみ要素を出現
  jQuery(".ol-one").hide();

  var business = jQuery(".ul-two").find('div');

  jQuery(business).hover(function(){
      jQuery(".ol-one").fadeIn(200);
    },function(){
      jQuery(".ol-one").hide();
    });
// カーソルを当てた時にのみ要素を出現


// スクロール時にヘッダーを出現させる
  function FixedAnime(){  

    var scroll = jQuery(window).scrollTop();
    var tops = jQuery("#top-wrapper").offset().top;
    var sec_second = jQuery("#header").find('section').eq(1); 

    if (scroll >= tops){
      jQuery(sec_second).removeClass("header_scroll");
      jQuery(sec_second).addClass("down_scroll");
    }else{
      if (jQuery(sec_second).hasClass("down_scroll")){
      jQuery(sec_second).removeClass("down_scroll");
      jQuery(sec_second).addClass("header_scroll");
        }
      }
  }
      
  jQuery(window).scroll(function(){
    FixedAnime();
  });
// スクロール時にヘッダーを出現させる


// imgの自動スライド
  jQuery('.fade').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 2000,
  fade: true,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  });
// imgの自動スライド


// ホバー時に要素を出現&削除
  var nav_1 = jQuery(".black-image").find("nav").eq(0);
  var nav_2 = jQuery(".black-image").find("nav").eq(1);
  var nav_3 = jQuery(".black-image").find("nav").eq(2);
  var nav_4 = jQuery(".black-image").find("nav").eq(3);
  var nav_5 = jQuery(".black-image").find("nav").eq(4);

  var bi_1 = jQuery(".backimg-1").find("span").eq(0);
  var bi_2 = jQuery(".backimg-2").find("span").eq(0);
  var bi_3 = jQuery(".backimg-3").find("span").eq(0);
  var bi_4 = jQuery(".backimg-4").find("span").eq(0);
  var bi_5 = jQuery(".backimg-5").find("span").eq(0);

  jQuery(".noneimg-1").hide();
  jQuery(".noneimg-2").hide();
  jQuery(".noneimg-3").hide();
  jQuery(".noneimg-4").hide();
  jQuery(".noneimg-5").hide();
      
  jQuery(nav_1).hover(function(){
      
      jQuery(bi_1).hide();
      jQuery(".noneimg-1").fadeIn(150);
    },function(){
      jQuery(".noneimg-1").fadeOut(300);
      jQuery(bi_1).show();   
  });

  jQuery(nav_2).hover(function(){
      
      jQuery(bi_2).hide();
      jQuery(".noneimg-2").fadeIn(150);
    },function(){
      jQuery(".noneimg-2").fadeOut(300);
      jQuery(bi_2).show();
  });

  jQuery(nav_3).hover(function(){
      
      jQuery(bi_3).hide();
      jQuery(".noneimg-3").fadeIn(150);
    },function(){
      jQuery(".noneimg-3").fadeOut(300);
      jQuery(bi_3).show();
  });

  jQuery(nav_4).hover(function(){
      
      jQuery(bi_4).hide();
      jQuery(".noneimg-4").fadeIn(150);
    },function(){
      jQuery(".noneimg-4").fadeOut(300);
      jQuery(bi_4).show();
  }); 

  jQuery(nav_5).hover(function(){
      
      jQuery(bi_5).hide();
      jQuery(".noneimg-5").fadeIn(150);
    },function(){
      jQuery(".noneimg-5").fadeOut(300);
      jQuery(bi_5).show();
  });  
// ホバー時に要素を出現&削除


// ホバー時に要素を出現&削除(事業紹介)
　var div3_nav_2 = jQuery(".div3").find("nav").eq(0);
  var div3_nav_3 = jQuery(".div3").find("nav").eq(1);
  var div3_nav_4 = jQuery(".div3").find("nav").eq(2);
  var div3_nav_5 = jQuery(".div3").find("nav").eq(3);

  var bi_2 = jQuery(".backimg-2").find("span").eq(0);
  var bi_3 = jQuery(".backimg-3").find("span").eq(0);
  var bi_4 = jQuery(".backimg-4").find("span").eq(0);
  var bi_5 = jQuery(".backimg-5").find("span").eq(0);

  jQuery(div3_nav_2).hover(function(){
      
      jQuery(bi_2).hide();
      jQuery(".noneimg-2").fadeIn(100);
    },function(){
      jQuery(".noneimg-2").fadeOut(250);
      jQuery(bi_2).show();
  });

  jQuery(div3_nav_3).hover(function(){
      
      jQuery(bi_3).hide();
      jQuery(".noneimg-3").fadeIn(100);
    },function(){
      jQuery(".noneimg-3").fadeOut(250);
      jQuery(bi_3).show();
  });

  jQuery(div3_nav_4).hover(function(){
      
      jQuery(bi_4).hide();
      jQuery(".noneimg-4").fadeIn(100);
    },function(){
      jQuery(".noneimg-4").fadeOut(250);
      jQuery(bi_4).show();
  }); 

  jQuery(div3_nav_5).hover(function(){
      
      jQuery(bi_5).hide();
      jQuery(".noneimg-5").fadeIn(100);
    },function(){
      jQuery(".noneimg-5").fadeOut(250);
      jQuery(bi_5).show();
  });  
// ホバー時に要素を出現&削除(事業紹介)

  
// ホバーアクション（企業情報）
  var sol_1 = jQuery("#solution-wrapper").find("div").eq(3).find("a").eq(0);
  var sol_2 = jQuery("#solution-wrapper").find("div").eq(3).find("a").eq(1);
  var sol_li_1 = jQuery(sol_1).find("li");
  var sol_li_2 = jQuery(sol_2).find("li");

  jQuery(sol_1).hover(function(){

     jQuery(sol_li_1).css('filter','invert(50%)');
     jQuery(sol_li_1).css('transition','0.2s');
   },function(){
     jQuery(sol_li_1).css('filter','invert(0%)');
     jQuery(sol_li_1).css('transition','0.5s');
   });

    jQuery(sol_2).hover(function(){

     jQuery(sol_li_2).css('filter','invert(50%)');
     jQuery(sol_li_2).css('transition','0.2s');
   },function(){
     jQuery(sol_li_2).css('filter','invert(0%)');
     jQuery(sol_li_2).css('transition','0.5s');
   });


  var button_left   = jQuery("#com_info-wrapper").find("div").eq(1).find("a").eq(0); 
  var button_center = jQuery("#com_info-wrapper").find("div").eq(1).find("a").eq(1); 
  var button_right  = jQuery("#com_info-wrapper").find("div").eq(1).find("a").eq(2); 

   jQuery(button_left).hover(function(){

     jQuery(button_left).css('filter','invert(30%)');
     jQuery(button_left).css('transition','0.4s');
   },function(){
     jQuery(button_left).css('filter','invert(0%)');
     jQuery(button_left).css('transition','0.4s');
   });

    jQuery(button_center).hover(function(){

     jQuery(button_center).css('filter','invert(30%)');
     jQuery(button_center).css('transition','0.4s');
   },function(){
     jQuery(button_center).css('filter','invert(0%)');
     jQuery(button_center).css('transition','0.4s');
   });

     jQuery(button_right).hover(function(){

     jQuery(button_right).css('filter','invert(30%)');
     jQuery(button_right).css('transition','0.4s');
   },function(){
     jQuery(button_right).css('filter','invert(0%)');
     jQuery(button_right).css('transition','0.4s');
   });


  var TCL_1 = jQuery("#TCL").find("a").eq(0);
  var TCL_2 = jQuery("#TCL").find("a").eq(1);
  var TCL_3 = jQuery("#TCL").find("a").eq(2);
  var TCL_li_1 = jQuery(TCL_1).find("li");
  var TCL_li_2 = jQuery(TCL_2).find("li");
  var TCL_li_3 = jQuery(TCL_3).find("li");  

    jQuery(TCL_1).hover(function(){

     jQuery(TCL_li_1).css('filter','invert(50%)');
     jQuery(TCL_li_1).css('transition','0.2s');
   },function(){
     jQuery(TCL_li_1).css('filter','invert(0%)');
     jQuery(TCL_li_1).css('transition','0.5s');
   });

    jQuery(TCL_2).hover(function(){

     jQuery(TCL_li_2).css('filter','invert(50%)');
     jQuery(TCL_li_2).css('transition','0.2s');
   },function(){
     jQuery(TCL_li_2).css('filter','invert(0%)');
     jQuery(TCL_li_2).css('transition','0.5s');
   });

    jQuery(TCL_3).hover(function(){

     jQuery(TCL_li_3).css('filter','invert(50%)');
     jQuery(TCL_li_3).css('transition','0.2s');
   },function(){
     jQuery(TCL_li_3).css('filter','invert(0%)');
     jQuery(TCL_li_3).css('transition','0.5s');
   });
// ホバーアクション（企業情報）


// クリック時に要素を出現&削除（企業情報）
  jQuery("#com_info-wrapper").find("div").eq(1).find("a").eq(0).css('background-color','#777777')  
  jQuery("#history-wrapper").hide();
  jQuery("#garelly-wrapper").hide();

  var button_left   = jQuery("#com_info-wrapper").find("div").eq(1).find("a").eq(0); 
  var button_center = jQuery("#com_info-wrapper").find("div").eq(1).find("a").eq(1); 
  var button_right  = jQuery("#com_info-wrapper").find("div").eq(1).find("a").eq(2); 
　 
　jQuery(button_left).click(function(){
   
   jQuery("#com_overview-wrapper").fadeIn(500);
   jQuery("#history-wrapper").hide();
   jQuery("#garelly-wrapper").hide();
   jQuery(button_left).css('background-color','#777777')
   jQuery(button_center).css('background-color','#000000')
   jQuery(button_right).css('background-color','#000000')
  });

　jQuery(button_center).click(function(){

   jQuery("#history-wrapper").fadeIn(500);
   jQuery("#com_overview-wrapper").hide();
   jQuery("#garelly-wrapper").hide();
   jQuery(button_left).css('background-color','#000000')
   jQuery(button_center).css('background-color','#777777')
   jQuery(button_right).css('background-color','#000000')
  });

　jQuery(button_right).click(function(){

   jQuery("#garelly-wrapper").fadeIn(500);
   jQuery("#history-wrapper").hide();
   jQuery("#com_overview-wrapper").hide();
   jQuery(button_left).css('background-color','#000000')
   jQuery(button_center).css('background-color','#000000')
   jQuery(button_right).css('background-color','#777777')
  });
// クリック時に要素を出現&削除（企業情報）


// ホバーアクション（実績紹介）  
  var button_1 = jQuery("#works_introduce-wrapper").find("nav").find("div").eq(1).find("a").eq(0); 
  var button_2 = jQuery("#works_introduce-wrapper").find("nav").find("div").eq(1).find("a").eq(1); 
  var button_3 = jQuery("#works_introduce-wrapper").find("nav").find("div").eq(1).find("a").eq(2); 
  var button_4 = jQuery("#works_introduce-wrapper").find("nav").find("div").eq(1).find("a").eq(3); 
  var button_5 = jQuery("#works_introduce-wrapper").find("nav").find("div").eq(1).find("a").eq(4); 
 

   jQuery(button_1).hover(function(){

     jQuery(button_1).css('background-color','rgba(200, 200, 200, 1.0)');
     jQuery(button_1).css('transition','0.3s');
   },function(){
     jQuery(button_1).css('background-color','rgba(0, 0, 0, 1.0)');
     jQuery(button_1).css('transition','0.3s');
   });

    jQuery(button_2).hover(function(){

     jQuery(button_2).css('background-color','rgba(200, 200, 200, 1.0)');
     jQuery(button_2).css('transition','0.3s');
   },function(){
     jQuery(button_2).css('background-color','rgba(0, 0, 0, 1.0)');
     jQuery(button_2).css('transition','0.3s');
   });

    jQuery(button_3).hover(function(){

     jQuery(button_3).css('background-color','rgba(200, 200, 200, 1.0)');
     jQuery(button_3).css('transition','0.3s');
   },function(){
     jQuery(button_3).css('background-color','rgba(0, 0, 0, 1.0)');
     jQuery(button_3).css('transition','0.3s');
   });

    jQuery(button_4).hover(function(){

     jQuery(button_4).css('background-color','rgba(200, 200, 200, 1.0)');
     jQuery(button_4).css('transition','0.3s');
   },function(){
     jQuery(button_4).css('background-color','rgba(0, 0, 0, 1.0)');
     jQuery(button_4).css('transition','0.3s');
   });

    jQuery(button_5).hover(function(){

     jQuery(button_5).css('background-color','rgba(200, 200, 200, 1.0)');
     jQuery(button_5).css('transition','0.3s');
   },function(){
     jQuery(button_5).css('background-color','rgba(0, 0, 0, 1.0)');
     jQuery(button_5).css('transition','0.3s');
   });



  var page1_button_2 = jQuery("#all_page1-wrapper").find("div").find("a").eq(0).find("li");
  var page1_button_3 = jQuery("#all_page1-wrapper").find("div").find("a").eq(1).find("li");
  var page1_button_4 = jQuery("#all_page1-wrapper").find("div").find("a").eq(2).find("li");
  var page1_button_5 = jQuery("#all_page1-wrapper").find("div").find("a").eq(3).find("li");
  var page1_button_6 = jQuery("#all_page1-wrapper").find("div").find("a").eq(4).find("li");


   jQuery(page1_button_2).hover(function(){

     jQuery(page1_button_2).css('background-color','rgba(221, 221, 221, 1.0)');
     jQuery(page1_button_2).css('transition','0.3s');
   },function(){
     jQuery(page1_button_2).css('background-color','rgba(187, 187, 187, 1.0)');
     jQuery(page1_button_2).css('transition','0.3s');
   });

   jQuery(page1_button_3).hover(function(){

     jQuery(page1_button_3).css('background-color','rgba(221, 221, 221, 1.0)');
     jQuery(page1_button_3).css('transition','0.3s');
   },function(){
     jQuery(page1_button_3).css('background-color','rgba(187, 187, 187, 1.0)');
     jQuery(page1_button_3).css('transition','0.3s');
   });

   jQuery(page1_button_4).hover(function(){

     jQuery(page1_button_4).css('background-color','rgba(221, 221, 221, 1.0)');
     jQuery(page1_button_4).css('transition','0.3s');
   },function(){
     jQuery(page1_button_4).css('background-color','rgba(187, 187, 187, 1.0)');
     jQuery(page1_button_4).css('transition','0.3s');
   });

   jQuery(page1_button_5).hover(function(){

     jQuery(page1_button_5).css('background-color','rgba(221, 221, 221, 1.0)');
     jQuery(page1_button_5).css('transition','0.3s');
   },function(){
     jQuery(page1_button_5).css('background-color','rgba(187, 187, 187, 1.0)');
     jQuery(page1_button_5).css('transition','0.3s');
   });

   jQuery(page1_button_6).hover(function(){

     jQuery(page1_button_6).css('background-color','rgba(221, 221, 221, 1.0)');
     jQuery(page1_button_6).css('transition','0.3s');
   },function(){
     jQuery(page1_button_6).css('background-color','rgba(187, 187, 187, 1.0)');
     jQuery(page1_button_6).css('transition','0.3s');
   });

   



  var works_img1 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(0).find("a").eq(1).find("img");
  var works_img1_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(0).find("a");
  var works_img2 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(1).find("a").eq(1).find("img");
  var works_img2_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(1).find("a");
  var works_img3 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(2).find("a").eq(1).find("img");
  var works_img3_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(2).find("a");
  var works_img4 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(3).find("a").eq(1).find("img");
  var works_img4_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(3).find("a");
  var works_img5 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(4).find("a").eq(1).find("img");
  var works_img5_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(4).find("a");
  var works_img6 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(5).find("a").eq(1).find("img");
  var works_img6_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(5).find("a");
  var works_img7 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(6).find("a").eq(1).find("img");
  var works_img7_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(6).find("a");
  var works_img8 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(7).find("a").eq(1).find("img");
  var works_img8_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(7).find("a");
  var works_img9 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(8).find("a").eq(1).find("img");
  var works_img9_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(8).find("a");
  var works_img10 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(9).find("a").eq(1).find("img");
  var works_img10_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(9).find("a");
  var works_img11 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(10).find("a").eq(1).find("img");
  var works_img11_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(10).find("a");
  var works_img12 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(11).find("a").eq(1).find("img");
  var works_img12_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(11).find("a");
  var works_img13 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(12).find("a").eq(1).find("img");
  var works_img13_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(12).find("a");
  var works_img14 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(13).find("a").eq(1).find("img");
  var works_img14_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(13).find("a");
  var works_img15 = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(14).find("a").eq(1).find("img");
  var works_img15_a = jQuery("#all_pic1-wrapper").find("nav").find("div").eq(14).find("a");

   jQuery(works_img1_a).hover(function(){

     jQuery(works_img1).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img1).css('transition','0.3s');
   },function(){
     jQuery(works_img1).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img1).css('transition','0.3s');
   });

   jQuery(works_img2_a).hover(function(){

     jQuery(works_img2).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img2).css('transition','0.3s');
   },function(){
     jQuery(works_img2).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img2).css('transition','0.3s');
   });

   jQuery(works_img3_a).hover(function(){

     jQuery(works_img3).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img3).css('transition','0.3s');
   },function(){
     jQuery(works_img3).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img3).css('transition','0.3s');
   });

   jQuery(works_img4_a).hover(function(){

     jQuery(works_img4).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img4).css('transition','0.3s');
   },function(){
     jQuery(works_img4).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img4).css('transition','0.3s');
   });

   jQuery(works_img5_a).hover(function(){

     jQuery(works_img5).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img5).css('transition','0.3s');
   },function(){
     jQuery(works_img5).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img5).css('transition','0.3s');
   });

   jQuery(works_img6_a).hover(function(){

     jQuery(works_img6).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img6).css('transition','0.3s');
   },function(){
     jQuery(works_img6).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img6).css('transition','0.3s');
   });

   jQuery(works_img7_a).hover(function(){

     jQuery(works_img7).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img7).css('transition','0.3s');
   },function(){
     jQuery(works_img7).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img7).css('transition','0.3s');
   });

   jQuery(works_img8_a).hover(function(){

     jQuery(works_img8).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img8).css('transition','0.3s');
   },function(){
     jQuery(works_img8).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img8).css('transition','0.3s');
   });

   jQuery(works_img9_a).hover(function(){

     jQuery(works_img9).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img9).css('transition','0.3s');
   },function(){
     jQuery(works_img9).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img9).css('transition','0.3s');
   });

   jQuery(works_img10_a).hover(function(){

     jQuery(works_img10).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img10).css('transition','0.3s');
   },function(){
     jQuery(works_img10).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img10).css('transition','0.3s');
   });

   jQuery(works_img11_a).hover(function(){

     jQuery(works_img11).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img11).css('transition','0.3s');
   },function(){
     jQuery(works_img11).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img11).css('transition','0.3s');
   });

   jQuery(works_img12_a).hover(function(){

     jQuery(works_img12).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img12).css('transition','0.3s');
   },function(){
     jQuery(works_img12).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img12).css('transition','0.3s');
   });

   jQuery(works_img13_a).hover(function(){

     jQuery(works_img13).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img13).css('transition','0.3s');
   },function(){
     jQuery(works_img13).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img13).css('transition','0.3s');
   });

   jQuery(works_img14_a).hover(function(){

     jQuery(works_img14).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img14).css('transition','0.3s');
   },function(){
     jQuery(works_img14).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img14).css('transition','0.3s');
   });

   jQuery(works_img15_a).hover(function(){

     jQuery(works_img15).css('filter','brightness(40%) saturate(10%)');
     jQuery(works_img15).css('transition','0.3s');
   },function(){
     jQuery(works_img15).css('filter','brightness(100%) saturate(100%)');
     jQuery(works_img15).css('transition','0.3s');
   });
// ホバーアクション（実績紹介）



// スクロール時にimgを変化


// スクロール時にimgを変化



// クリック時に要素を出現（実績紹介）
  var button_0 = jQuery("#works_introduce-wrapper").find("nav").find("div").eq(0).find("a");
  var button_other_all = jQuery("#works_introduce-wrapper").find("nav").find("div").eq(1);


    jQuery(button_0).click(function(){

      jQuery(button_other_all).slideToggle();

    });
// クリック時に要素を出現（実績紹介）


});