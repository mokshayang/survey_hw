
let up=$('#go-top');
up.hide();
$(window).scroll(function() {
let self=$(this),
    height=self.height(),
    top=self.scrollTop();
		// console.log(height);
		// console.log(top);
if(top>1.4*height) {
    up.fadeIn(800);
} else {
    up.fadeOut(800);
};

});

// up.click(() => {
//     $('html,body').animate({
//         scrollTop : 0
//     } , 1500  );
// });

//fade in_show