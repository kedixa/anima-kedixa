<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of #main and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 */

?>
                <aside id="colophon" role="complementary" <?php cryout_schema_microdata( 'sidebar' );?>>
                        <div id="colophon-inside" <?php anima_footer_colophon_class();?>>
                                <?php get_sidebar( 'footer' );?>
                        </div>
                </aside><!-- #colophon -->

        </div><!-- #main -->
        <footer id="colophon" class="site-footer" role="contentinfo">
        <div id="my-footer" class="site-info">
                <a target="_blank" href="http://blog.kedixa.top/about/">关于</a> - 
                <a target="_blank" href="http://blog.kedixa.top/link/">友情链接</a> - 
                <a target="_blank" href="http://blog.kedixa.top/feed/">文章RSS</a> - 
                <a target="_blank" href="http://blog.kedixa.top/copyrights/">版权声明</a>
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
</div><!-- site-wrapper -->
        <?php wp_footer(); ?>
</body>
</html>
