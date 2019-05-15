
<?php get_header(); ?>

	<?php get_template_part( 'parts/header' ); ?>

	<div class="bg--hero"></div>

	<section class="hero section">

		<div class="parallax parallax--circle--white parallax--sped-seven parallax--position-seven"></div>
		<div class="parallax parallax--circle--light parallax--sped-four parallax--position-six"></div>
		<div class="parallax parallax--circle--white parallax--sped-five parallax--position-five"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.svg" alt="" class="parallax parallax--sped-five parallax--position-four parallax--width-norm">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/percent.png" alt="" class="parallax parallax--num-left">

		<div class="container">
			<div class="row">
				<div class="offset-xl-2 col-xl-4 col-lg-6">

					<p class="hero__sub-title"><b>Нет такой страницы</b></p>

					<div class="hero__logo">
						<svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:logo"></svg>
					</div>

					<a href="<?php echo get_home_url(); ?>" class="btn hero__btn">Вернутся на главную<span><svg><use xlink:href="/wp-content/plugins/svg-spritemap/defs.svg#:arrow"></use></svg></span></a>

				</div>

			</div>

		</div>
	</section>

<?php get_footer('curse'); ?>