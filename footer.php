	<div id="footer">
		<!-- <span class="date"><script src="<?php bloginfo('template_url'); ?>/date.js" type="text/javascript"></script></span><br /> -->
		<span id="copyright">
			Copyright &copy; 2010-<?php echo date("Y"); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> . 					
		</span><!-- #copyright -->
		Powered by <a id="powered" href="http://wordpress.org/">WordPress</a> .
		<!-- <a href="<?php bloginfo('url'); ?>/wp-admin"><?php bloginfo('name'); ?></a> -->
		<span id="themeinfo">
			<?php printf(__('<a href="%1$s">NoSky</a> Theme by <a href="%2$s">TankyWoo</a>. '), 'http://www.wutianqi.com/', 'http://www.wutianqi.com/'); ?>
		</span>
		<span class="mylogin">
			<?php printf(__('<a href="%1$s">登录</a>'), 'http://www.wutianqi.com/wp-login.php'); ?>
		</span>
		<span class="suggest">
			<?php printf(__('Suggest the <a href="%1$s" rel="nofollow" target="_blank">Firefox</a> | <a href="%2$s" rel="nofollow" target="_blank">Chrome</a> | <a href="%3$s" rel="nofollow" target="_blank">IE9</a>.'), 'http://www.firefox.com.cn/', 'http://www.google.cn/chrome/intl/zh-CN/landing_chrome.html', 'http://info.msn.com.cn/ie9/'); ?>
		</span>
		<span class="analytics">
		<?php if (get_option(' simple_analytics')!="") {?>
			<?php echo stripslashes(stripslashes(get_option('simple_analytics'))); ?>
		<?php }?>
		</span>
		<br />
	</div><!-- #footer -->
	<?php wp_footer() ?>
</body>



<div id="full" style="width:50px; height:95px; position:fixed; left:50%; top:425px; margin-left:493px;  z-index:100; text-align:center; cursor:pointer;">
<a><img src="http://www.wutianqi.com/wp-content/themes/nosky_wtq/images/up.png" border=0 alt="返回顶部"></a>
</div>
<script src="http://top.baidu.com/js/news_top.js" type="text/javascript"></script>

</html>