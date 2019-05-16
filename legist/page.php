
<?php get_header(); ?>

	<?php get_template_part( 'parts/top-line' ); ?>

	<?php get_template_part( 'parts/header' ); ?>


	<main class="main">

		<section class="hero" id="app">
			<div class="container hero__container">

				<h3><span>Адвокат </span>Тюрина Дина Игоревна</h3>

				<p><?php the_field('subtitle'); ?></p>

				<h1><?php the_title(); ?></h1>

				<button class="btn btn--transparent order_open">Назначить встречу</button>

				<img class="hero__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/lawyer.png" alt="адвокат">

			</div>
		</section>

		<section class="services" id="services">
			<div class="container">
				
				<div class="services__list">

					<?php if( have_rows('list') ): ?>

						<?php while( have_rows('list') ): the_row(); 

							$title = get_sub_field('title');
							$text = get_sub_field('text');
							$number = get_sub_field('number');
							$link = get_sub_field('link');
							$class = get_sub_field('class');

							?>

							
								<?php if( $class ): ?>
									<div class="services__item services__title">
										<h2><?php echo $class; ?></h2>
									</div>
								<?php else: ?>
									<div class="services__item">
										<?php if( $link ): ?>
											<span><?php echo $number; ?></span>
											<h4><?php echo $title; ?></h4>
											<p><?php echo $text; ?></p>
											<a href="<?php echo $link; ?>" class="services__btn">Подробнее</a>
										<?php endif; ?>

									</div>
								<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</div>
		</section>

		<section class="about" id="about">
			<div class="container about__container">

				<div class="about__title">
					<h2>Об <br> адвокате</h2>
				</div>

				<div class="about__info">
					<?php the_field('content'); ?>
				</div>

			</div>
		</section>

		<section class="answers">
			<div class="container answers__container">
				
				<div class="answers__title">
					<h2>Faq'<span>s</span></h2>

					<p>Здесь собраны ответы на <br> самые популярные вопросы. Если <br> Вы не нашли ответ на <br> интересующий Вас вопрос - <br>Воспользуйтесь формой</p>

					<div class="click">
						<a href="#question">Задать вопрос</a>
					</div>
				</div>

				<div class="answers__list">
					<?php // Display blog posts on any page @ http://m0n.co/l
						$temp = $wp_query; $wp_query= null;
						$wp_query = new WP_Query(); $wp_query->query('showposts=-1' . '&paged='.$paged);
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<div class="answers__item">
							<h5>Елена Иванова, 
								<time datetime="1969-07-16">
									<?php echo get_the_date('Y-m-d'); ?>
								</time>
							</h5>

							<?php the_content(); ?>

							<div class="answers__dropdown">
								<h5>Отвечает адвокат<span>Тюрина Дина Игоревна</span></h5>
								<p><?php the_field('answer'); ?></p>
							</div>

							<div class="answers__dropdown_open-close"></div>

						</div>


						<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>
					
					<button class="answers__more_open">Больше вопросов</button>
					<button class="answers__more_close">Свернуть</button>

				</div>

			</div>
		</section>

		<section class="question" id="question">
			<div class="container">
				
				<h2>Задать вопрос <span>адвокату</span></h2>

				<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>

			</div>
		</section>
		
		<section class="contacts" id="contacts">
			<div class="container contacts__container">
				
				<div class="contacts__info">
					<h2>Контакты</h2>

					<div><span>Телефон:</span><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></div>
					<div><span>Email:</span><a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a></div>
					<div><span>Адрес:</span><p><?php the_field('position', 'option'); ?></p></div>

					<button class="btn feedback_open">Обратная связь</button>
				</div>

				<div id="map"></div>

			</div>
		</section>

	</main>

<?php get_footer(); ?>
