
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
					
					<div class="services__item">
						<span>01.</span>
						<h4>Уголовные дела</h4>
						<p>(ст.159, 290, 291, 228, 228.1 УК <br> РФ)</p>
						<a href="service_1.html" target="_blank" class="services__btn">Подробнее</a>
					</div>

					<div class="services__item"></div>

					<div class="services__item services__title">
						<h2>Услуги</h2>
					</div>

					<div class="services__item"></div>

					<div class="services__item">
						<span>02.</span>
						<h4>Арбитраж</h4>
						<p>(В том числе, споры с <br> Агенством по страхованию <br> вкладов)</p>
						<a href="service_1.html" target="_blank" class="services__btn">Подробнее</a>
					</div>

					<div class="services__item">
						<span>03.</span>
						<h4>Договорная работа</h4>
						<p>(В том числе составление брачных контрактов)</p>
						<a href="service_1.html" target="_blank" class="services__btn">Подробнее</a>
					</div>

					<div class="services__item">
						<span>04.</span>
						<h4>Семейные споры</h4>
						<a href="service_1.html" target="_blank" class="services__btn">Подробнее</a>
					</div>

					<div class="services__item">
						<span>05.</span>
						<h4>Жилищные споры</h4>
						<a href="service_1.html" target="_blank" class="services__btn">Подробнее</a>
					</div>

					<div class="services__item">
						<span>06.</span>
						<h4>Споры в <br> сфере закупок</h4>
						<a href="service_1.html" target="_blank" class="services__btn">Подробнее</a>
					</div>

					<div class="services__item"></div>

					<div class="services__item">
						<span>07.</span>
						<h4>Защита прав <br> потребителей</h4>
						<a href="service_1.html" target="_blank" class="services__btn">Подробнее</a>
					</div>

					<div class="services__item">
						<span>08.</span>
						<h4>Юридическое <br> абоненское <br> обслуживание</h4>
						<a href="service_1.html" target="_blank" class="services__btn">Подробнее</a>
					</div>

				</div>

			</div>
		</section>

		<section class="about" id="about">
			<div class="container about__container">

				<div class="about__title">
					<h2>Об <br> адвокате</h2>
				</div>

				<div class="about__info">
					<p>Адвокат по гражданским делам <span><b>Тюрина Дина Игоревна</b></span> является <br> членом Московской коллегии адвокатов "Верус". <br><span>Регистрационных номер 77/10823 </span>в реестре Адвокатской палаты города</p>
					<p>Юридические консультации по правовым вопросам, предоставление юридический услуг , связанных с защитой интересов граждан и юридических лиц в органах государственой власти, органах местного самоуправления, общественных обьединениях и иных организвциях, а также арбитражных судах и судах общей юрисдикции.</p>
				</div>

			</div>
		</section>

		<section class="answers">
			<div class="container answers__container">
				
				<div class="answers__title">
					<h2>Faq'<span>s</span></h2>

					<p>Здесь собраны ответы на <br> самые популярные вопросы. Если <br> Вы не нашли ответ на <br> интересующий Вас вопрос - <br>Воспользуйтесь формой</p>

					<button class="question_open">Задать вопрос</button>
				</div>

				<div class="answers__list">
					
					<div class="answers__item">
						<h5>Елена Иванова, 24/09/2019</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur?</p>

						<div class="answers__dropdown">
							<h5>Отвечает адвокат<span>Тюрина Дина Игоревна</span></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea.</p>
						</div>

						<div class="answers__dropdown_open-close"></div>

					</div>

					<div class="answers__item">
						<h5>Елена Иванова, 24/09/2019</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur?</p>

						<div class="answers__dropdown">
							<h5>Отвечает адвокат<span>Тюрина Дина Игоревна</span></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea.</p>
						</div>

						<div class="answers__dropdown_open-close"></div>

					</div>

					<div class="answers__item">
						<h5>Елена Иванова, 24/09/2019</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur?</p>

						<div class="answers__dropdown">
							<h5>Отвечает адвокат<span>Тюрина Дина Игоревна</span></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea.</p>
						</div>

						<div class="answers__dropdown_open-close"></div>

					</div>

					<div class="answers__item">
						<h5>Елена Иванова, 24/09/2019</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur?</p>

						<div class="answers__dropdown">
							<h5>Отвечает адвокат<span>Тюрина Дина Игоревна</span></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea.</p>
						</div>

						<div class="answers__dropdown_open-close"></div>

					</div>

					<div class="answers__item answers__item_hidden">
						<h5>Елена Иванова, 24/09/2019</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur. Ut natus deleniti non dolore excepturi animi porro quam, vitae eos tenetur?</p>

						<div class="answers__dropdown">
							<h5>Отвечает адвокат<span>Тюрина Дина Игоревна</span></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea. Modi eaque quaerat voluptatum rerum sed, totam aliquam fuga atque ducimus ea.</p>
						</div>

						<div class="answers__dropdown_open-close"></div>

					</div>

					<button class="answers__more_open">Больше вопросов</button>
					<button class="answers__more_close">Свернуть</button>

				</div>

			</div>
		</section>

		<section class="question">
			<div class="container">
				
				<h2>Задать вопрос <span>адвокату</span></h2>

				<form action="#" class="form question__form">
					<div class="question__form_input">

						<div class="">
							<input type="text" name="name" placeholder="Ваше имя" required>
						</div>

						<div class="">
							<input type="tel" name="phone" required placeholder="Ваш телефон">
						</div>

						<div class="">
							<button type="submit" class="btn" name="submit">Отправить</button>
						</div>
					</div>
					
					<textarea cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
				</form>

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
