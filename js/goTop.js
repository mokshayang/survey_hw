var bt=$('#go-top');
$(window).scroll(function() {
var self=$(this),
    height=self.height(),
    top=self.scrollTop();
//		console.log(height);
//		console.log(top);
if(top>2*height) {
    bt.fadeIn(800);
} else {
    bt.fadeOut(800);
};
});

bt.click(function() {
$('html,body').animate({
    scrollTop:0
},1500,'easeOutCirc');
});
