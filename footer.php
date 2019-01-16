<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of #main and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 */

?>
				<?php cryout_absolute_bottom_hook(); ?>
				<aside id="colophon" role="complementary" style="background-color:rgba(255,255,255,255);" <?php cryout_schema_microdata( 'sidebar' );?>>
						<div id="colophon-inside" <?php anima_footer_colophon_class();?>>
								<?php get_sidebar( 'footer' );?>
						</div>
				</aside><!-- #colophon -->

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="my-footer" class="site-info">
			<?php $base_url = home_url();
				function print_foot_link($base_url, $link, $comment, $tail) {
					echo '<a target="_blank" href="' . $base_url . $link . '">' . $comment . "</a> " . $tail;
				}
			?>

			<?php print_foot_link($base_url, "/about/", "关于", " -\n"); ?>
			<?php print_foot_link($base_url, "/link/", "友情链接", " -\n"); ?>
			<?php print_foot_link($base_url, "/feed/", "文章RSS", " -\n"); ?>
			<?php print_foot_link($base_url, "/copyrights/", "版权声明", "\n"); ?>
			<br>
			<a target="_blank" href="http://www.miitbeian.gov.cn/">冀ICP备16024227号</a> -
			<a target="_blank" href="https://www.aliyun.com/">阿里云</a>
			<br>
			Powered by
			<a target="_blank" href="http://www.cryoutcreations.eu/wordpress-themes/anima"
				title="Anima WordPress Theme by Cryout Creations">Anima</a> &amp;
			<a target="_blank" href="http://wordpress.org/" title="Semantic Personal Publishing Platform">WordPress.</a>
			<br>
			&copy; 2016-<?php echo date("Y")?> kedixa. All Rights Reserved.<br>
		</div><!-- my-footer -->
	</footer>

	<div id="bottom-right-corner">
		<a id="to-top" href="javascript:void(0)" title="返回顶部">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="30" height="30">
			<polyline points="5,25 15,15 25,25" style="fill:none;stroke:currentColor;stroke-width:3" />
		</svg>
		</a>
		<a id="show-qrcode" href="javascript:void(0)" title="扫一扫">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="30" height="30">
			<rect x="2" y="2" width="12" height="12" style="fill:none;stroke:currentColor;stroke-width:2"/>
			<rect x="6" y="6" width="4" height="4" style="fill:currentColor;stroke:currentColor;stroke-width:2"/>
			<rect x="17" y="2" width="12" height="12" style="fill:none;stroke:currentColor;stroke-width:2"/>
			<rect x="21" y="6" width="4" height="4" style="fill:currentColor;stroke:currentColor;stroke-width:2"/>
			<rect x="2" y="17" width="12" height="12" style="fill:none;stroke:currentColor;stroke-width:2"/>
			<rect x="6" y="21" width="4" height="4" style="fill:currentColor;stroke:currentColor;stroke-width:2"/>
			<rect x="20" y="20" width="6" height="6" style="fill:currentColor;stroke:currentColor;stroke-width:2"/>
		</svg>
		</a>
		<div id="qrcode-wrapper"><div style="margin-top:20px;">扫一扫在其他设备上查看</div><div id="the-qrcode"> </div></div>
	</div>
</div><!-- site-wrapper -->
		<?php wp_footer(); ?>
</body>
</html>
