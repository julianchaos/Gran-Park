<?php
/**
 * @package Ndrade
 * @subpackage Gran Park
 * @since Empreendimentos 1.0
 */
?>
			<footer>
				<div class="container">
					<nav class="navbar navbar-default" role='navigation'>
						<div class='row'>
							<div class='text-center col-xs-12 col-md-1'>
								<a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?>">
									<img src="<?php bloginfo('template_directory') ?>/images/logo-footer.png" alt="<?php bloginfo('name') ?>" />
								</a>
							</div>
							<div class='text-center col-xs-12 col-md-11 '>
<?php
wp_nav_menu( array( 
	'menu' => 'top_menu',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'nav navbar-nav',
	//process nav menu using our custom nav walker
	'walker' => new wp_bootstrap_navwalker() 
	) );
?>
							</div>
						</div>
					</nav>
					<div class="row" role="contentinfo">
						<div class="col-xs-4 col-xs-offset-2 col-sm-3 col-sm-offset-3 col-md-2 col-md-offset-4">
							<img src="<?php bloginfo('template_directory') ?>/images/logo-cc.png" class="img-responsive" alt="Cúbiculo Criativo" />
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<img src="<?php bloginfo('template_directory') ?>/images/logo-rds.png" class="img-responsive" alt="RDS" />
						</div>
					</div>
				</div>
			</footer>
		</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>
