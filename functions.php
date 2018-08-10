<?php
// 保护登录
add_action('login_enqueue_scripts', 'login_protection');
function login_protection() {
    if($_GET['kedixa'] != 'goodman') header('Location: http://kedixa.top');
}

add_filter('wp_footer', 'kedixa_add_to_footer');
function kedixa_add_to_footer() {
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
