$(document).ready(function(){

    $(".faq .faq-item .faq-title").click(function(){
        var item = $(this).parent('.faq-item');
        var item2 = $(this).find('.fa');

        if(item.hasClass("active")) {
        	if (!item2.hasClass("fa-angle-right")) {
            item2.removeClass("fa-angle-up").addClass("fa-angle-down");
            item.toggleClass("active");
          }
        } else {
        	if (!item2.hasClass("fa-angle-right")) {
            item2.removeClass("fa-angle-down").addClass("fa-angle-up");
            item.toggleClass("active");
          }
        }
        // onresize(300);
    });


});
