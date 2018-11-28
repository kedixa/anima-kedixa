jQuery(document).ready(function(){
	jQuery("#show-qrcode").mouseover(function() {
		jQuery("#qrcode-wrapper").show();
	});
	jQuery("#show-qrcode").mouseout(function() {
		jQuery("#qrcode-wrapper").hide();
	});
	jQuery("#to-top").on("click", function(){
		jQuery("html").animate({ scrollTop: 0 }, 200);
	});
});

