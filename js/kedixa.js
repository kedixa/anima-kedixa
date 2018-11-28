jQuery(document).ready(function(){
	jQuery("#show-qrcode").mouseover(function() {
		jQuery("#qrcode-wrapper").show();
		jQuery("#show-qrcode").css("background-color", "#D0422C");
	});
	jQuery("#show-qrcode").mouseout(function() {
		jQuery("#qrcode-wrapper").hide();
		jQuery("#show-qrcode").css("background-color", "rgba(230,230,230,0.5)");
	});
	jQuery("#to-top").mouseover(function() {
		jQuery("#to-top").css("background-color", "#D0422C");
	});
	jQuery("#to-top").mouseout(function() {
		jQuery("#to-top").css("background-color", "rgba(230,230,230,0.5)");
	});
	jQuery("#to-top").on("click", function(){
		jQuery("html").animate({ scrollTop: 0 }, 500);
	});
});

