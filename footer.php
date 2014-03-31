<?php
/**
 * @package Ndrade
 * @subpackage Gran Park
 * @since Empreendimentos 1.0
 */
?>
			<footer>
				<div id="footer" role="contentinfo">
				<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
					<p>
						<?php printf(__('%1$s is proudly powered by %2$s'), get_bloginfo('name'),
						'<a href="http://wordpress.org/">WordPress</a>'); ?>
						<br /><?php printf(__('%1$s and %2$s.'), '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries (RSS)') . '</a>', '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments (RSS)') . '</a>'); ?>
						<!-- <?php printf(__('%d queries. %s seconds.'), get_num_queries(), timer_stop(0, 3)); ?> -->
					</p>
				</div>

			</footer>
		</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>
