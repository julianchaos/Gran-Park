<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package Ndrade
 * @subpackage Gran Park
 * @since Empreendimentos 1.0
 */
?>
<?php get_header() ?>
<article class="front-page">
	<!-- slider -->
	<div id="carousel-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-generic" data-slide-to="1"></li>
			<li data-target="#carousel-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php bloginfo('template_directory') ?>/images/slider/01.jpg" alt="..." />
				<div class="carousel-caption">
					<h3>teste</h3>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/images/slider/02.jpg" alt="..." />
				<div class="carousel-caption">
					<h3>teste</h3>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/images/slider/03.jpg" alt="..." />
				<div class="carousel-caption">
					<h3>teste</h3>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
	<h2 class="text-center h3">A imaginação pode nos levar a lugares incríveis...</h2>
	<div id="primary">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
					<h3>... e, muitas vezes, estes lugares estão pertinho de nós.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget urna eget leo hendrerit ullamcorper. Etiam porta nisi justo, id tincidunt felis blandit id. Nunc dignissim ut sem a rutrum. Donec lorem nibh, lacinia in odio sed, faucibus sollicitudin dolor. Donec volutpat eget ligula et tempor.
					<p>Vivamus pharetra nunc vitae luctus commodo. Nullam sit amet risus ut lorem aliquet semper. Morbi quis velit vel risus dapibus aliquet et in dolor. Suspendisse vestibulum lacinia erat, ac imperdiet magna fermentum pellentesque. Integer vitae massa at lorem egestas aliquam.
					<p>Sed euismod ipsum eu imperdiet convallis. Aliquam aliquam varius justo, non porta arcu sollicitudin in. Aliquam sed consectetur mi. Nam urna dui, consequat sit amet augue vel, pulvinar tempus turpis. Integer in iaculis nisl, eget imperdiet purus. Nulla eu dapibus nunc. Proin sed ipsum ligula. 
					<p>Proin nec sem erat. Phasellus libero lectus, rutrum malesuada tortor a, convallis condimentum enim. Vestibulum mattis venenatis lacus, a molestie lorem vestibulum a. Suspendisse fermentum rhoncus nisl et ultricies. Ut tellus quam, volutpat nec mauris vel, imperdiet ornare felis. Maecenas sagittis ultrices ante, vel viverra est vestibulum id. Nulla facilisi. Sed arcu dui, venenatis sit amet consectetur nec, tempus porta justo. Nullam facilisis odio a purus iaculis placerat.
				</div>
			</div>
		</div>
	</div>
	<div id="secondary">
		<div class="container">
			<img class="img-responsive" src="<?php bloginfo('template_directory') ?>/images/home/logo-central.png" alt="Gran Park" />
			<h3 class="text-center">O lugar que você sonhou, mais perto do que você imaginava</h3>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget urna eget leo hendrerit ullamcorper. Etiam porta nisi justo, id tincidunt felis blandit id. Nunc dignissim ut sem a rutrum. Donec lorem nibh, lacinia in odio sed, faucibus sollicitudin dolor. Donec volutpat eget ligula et tempor.
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget urna eget leo hendrerit ullamcorper. Etiam porta nisi justo, id tincidunt felis blandit id. Nunc dignissim ut sem a rutrum. Donec lorem nibh, lacinia in odio sed, faucibus sollicitudin dolor. Donec volutpat eget ligula et tempor.
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget urna eget leo hendrerit ullamcorper. Etiam porta nisi justo, id tincidunt felis blandit id. Nunc dignissim ut sem a rutrum. Donec lorem nibh, lacinia in odio sed, faucibus sollicitudin dolor. Donec volutpat eget ligula et tempor.
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget urna eget leo hendrerit ullamcorper. Etiam porta nisi justo, id tincidunt felis blandit id. Nunc dignissim ut sem a rutrum. Donec lorem nibh, lacinia in odio sed, faucibus sollicitudin dolor. Donec volutpat eget ligula et tempor.
					<p><img class="img-responsive" src="<?php bloginfo('template_directory') ?>/images/home/img-central-01.jpg" alt="" />
				</div>
				<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
					<p><img class="img-responsive" src="<?php bloginfo('template_directory') ?>/images/home/img-central-02.jpg" alt="" />
					<p><img class="img-responsive" src="<?php bloginfo('template_directory') ?>/images/home/img-central-03.jpg" alt="" />
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer() ?>
<!-- EOF -->