<?php
// 保护登录
add_action('login_enqueue_scripts', 'login_protection');
function login_protection() {
	if($_GET['kedixa'] != 'goodman') header('Location: ' . site_url());
}

function remove_google_fonts() {
	// remove anima-googlefonts enqueued by anima
	wp_dequeue_style('anima-googlefonts');
}
// add action to wp_head with priority 2, before wp print styles
add_action('wp_head', 'remove_google_fonts', 2);

add_filter('wp_footer', 'kedixa_add_to_footer');
/*@ Resolve &amp; issue of syntax highlighter */
// https://github.com/Automattic/syntaxhighlighter/issues/98#issuecomment-633230821
add_filter('syntaxhighlighter_htmlresult', function($html) {
        return preg_replace('/&amp;([^;]+;)/', '&$1', $html);
});
function kedixa_add_to_footer() {
?>
	<?php
	if(! wp_is_mobile()) {
		global $wp; $thispage_url = home_url(add_query_arg(array(),$wp->request));
	?>
	<!-- QR Code -->
	<!-- Thanks: https://github.com/davidshimjs/qrcodejs -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/qrcode.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/kedixa.js' ?>"></script>
	<script type="text/javascript">
		var qrcode = new QRCode(document.getElementById("the-qrcode"), {
			width : 150,
			height : 150,
			colorLight: '#d9edf7'
		});
		function makeCode () {
			qrcode.makeCode("<?php echo $thispage_url ?>");
		}
		makeCode();
	</script>
	<?php
	}
	if(! is_user_logged_in() ) {
	?>

	<!-- Baidu analytics -->
	<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?5434e55160687ae7ecef6da3de92d6c6";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
	</script>

	<!-- Google analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-86820822-1', 'auto');
		ga('send', 'pageview');
	</script>
	<?php
	}
	?>
<?php
}
