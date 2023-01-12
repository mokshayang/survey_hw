
let bt=$('#go-top');
bt.hide();
$(window).scroll(function() {
let self=$(this),
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
