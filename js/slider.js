

 //↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓調整畫面時停止輪播，結束後開始輪播↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓//
 let next = false,
     prev = false;
 $('.next').click(function() { //往右按一下
     if (next == false) {
         next = true;
         if (x >= -((k - 1) * 100)) { //初始0; -100%; -200%; -300%; -400%;
             x -= 100; //-100%; -200%; -300%; -400%; -500%;
             that.eq((x / -100) - 1).children().removeClass('point');
             that.eq(x / -100).children().addClass('point');
             if (x == -(k * 100)) {
                 that.eq(k - 1).children().removeClass('point');
                 that.eq(0).children().addClass('point');
             };
         } else {
             banner.css({
                 'left': '0%'
             }); //定位:0;
             x = -100; //-100%;
             that.eq((x / -100) - 1).children().removeClass('point');
             that.eq(x / -100).children().addClass('point');
         };
         banner.animate({
             left: x + '%'
         }, 1000,"easeOutCirc");
         //↓↓↓↓↓↓↓防止重複點擊↓↓↓↓↓↓↓
         setTimeout(function() {
             next = false;
         }, 1001);
     };
 });
 //↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑//

 $('.prev').click(function() { //往左按一下
     if (prev == false) {
         prev = true;
         if (x <= -100) { //定位-500%  => -400% => -300% => -200% =>-100%
             if (x == -(k * 100)) {
                 that.eq(k - 1).children().addClass('point');
                 that.eq(0).children().removeClass('point');
             };
             x += 100; // -400; -300; -200; -100; 0;
             that.eq((x / -100) + 1).children().removeClass('point');
             that.eq(x / -100).children().addClass('point');
             console.log(x);
         } else {
             banner.css({
                 'left': -(k * 100) + '%'
             }); //定位-500%
             x = -(k - 1) * 100; //-400%;
             that.eq(k - 1).children().addClass('point');
             that.eq(0).children().removeClass('point');
             console.log(x);
         };
         banner.animate({
             left: x + '%'
         }, 1000,"easeOutCirc");
         //↓↓↓↓↓↓↓防止重複點擊↓↓↓↓↓↓↓
         setTimeout(function() {
             prev = false;
         }, 1001);
     };
 });
 //↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑//

 //------------------小圈圈按鈕功能---------------------//
 for (let i = 0; i < 5; i++) {
     that.eq(i).click(function() {
         that.children().removeClass('point');
         that.eq(i).children().addClass('point');
         x = -(i * 100);
         banner.css({
             'left': x + '%'
         });

     });
 };
 //↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑//
 //---------------autoplay------------------//
 function startSlide() {
     interval = setInterval(function() {
         $('.next').click();
     }, 2400);
 }
 startSlide();
 //↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑//

 function stopSlide() {
     clearInterval(interval)
 };


 $('#turn').on('mouseleave', startSlide).on('mouseenter', stopSlide)
 //滑鼠離開時，呼叫輪播函數。進入時候，呼叫停止!!

 //------------------新增監聽事件(可見事件改變時)----------------//
 document.addEventListener("visibilitychange", function() {
     var slideSwitch = document.hidden; //新增變數=文件隱藏
     if (slideSwitch == false) {
         startSlide();
     } else if (slideSwitch == true) {
         stopSlide();
     };
 });