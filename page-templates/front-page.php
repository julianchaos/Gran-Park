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
				<img src="<?php bloginfo('template_directory') ?>/images/slider/Slider-01.jpg" alt="..." />
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/images/slider/Slider-02.jpg" alt="..." />
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/images/slider/Slider-03.jpg" alt="..." />
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
					<p>Desde criança nós sonhamos com lugares incríveis. As brincadeiras queestimulam a imaginação, nos levam para o espaço sideral, cavernas, ilhas do tesouro, para o fundo dos oceanos, florestas encantadas e diversos outros cenários imaginários que ilustram nossas fantasias.</p>
					<p>Quando nos tornamos adultos, continuamos sonhando com outros lugares incríveis que vimos em algum filme ou revista, desejamos conhecer outrospaíses, outras culturas e nações ao redor do planeta. Desta vez, os sonhos já não são mais fantasias e se tornam totalmente possíveis.</p>
					<p>Em Petrópolis, existe um lugar especial, daqueles que todo mundo sonha. Planejado para viver com conforto, segurança, qualidade de vida, lazer e o melhor: a poucos minutos, das melhores atrações que você só encontra na Cidade Imperial e em Itaipava.</p>
					<p>Viva o mellhor dos dois mundos. Petrópolis e Itaipava a poucos minutos da sua casa. Desfrute do melhor que Petrópolis pode oferecer em produtos e serviços, diversão e lazer e curta também todo a sofisticação, gastronomia,decoração, moda e todas as diversas atrações de Itaipava.<br>Conheça agora o empreendimento que vai colocar você no ponto mais estratégico de toda a Região Serrana.</p>
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
					<p>Uma das características mais importantes na escolha do lugar onde você vai morar ou investir é a localização. Estar bem localizado, além da comodidade, é uma questão de valorização. Alguns ítens como segurança, projeto arquitetônico, qualidade dos acabamentos, ítens de lazer e rentabilidade do investimento são essenciais e devem ser considerados.
					<p>O Gran Park Residencial Club possui atrativos que vão além dos oferecidos pelo mercado. Localizado em Corrêas, apenas 10 minutos de Itaipava e 20 do centro de Petrópolis, o residencial oferece a comodidade de se desfrutar o melhor dos dois mundos. Em poucos minutos, você pode estar se deliciando com a gastronomia de Itaipava ou fazendo compras nas diversas opções que a Cidade Imperial oferece.</p>
					<p>Mas, as vantagens começam dentro do Gran Park. O conforto de morar em um apartamento de 138m2 e aproveitar ítens de lazer como piscina, sauna seca e vapor, fitness center, espaço lounge, home cinema, salão de jogos, game center, espaço kids, espaço gourmet, redário e muito mais.</p>
					<p>Mais confortável que isso são as condições de compra das unidades. Você pode fazer seu fluxo de pagamento dentro da tabela disponível com os nossos corretores. Mas, antes de decidir, conheça mais detalhes do Gran Park Residencial Club.</p>
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