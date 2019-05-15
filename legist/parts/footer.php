
	<footer class="footer">
		<div class="container footer__container">
			
			<div class="footer__col">
				<h3>Адвокат Тюрина Дина Игоревна</h3>

				<p><b>Регистрационный номер. 77.10823</b> <br> в реестре Адвокатской палаты города Москвы. <br> Член Адвакатской палаты Чешской республики <br> (Česká advokátní komora (ČAK) с 2016 года</p>

				<p>Copyright &copy; 2019, Все права защищены.</p>
			</div>

			<div class="footer__col">
				<nav class="nav">
					<h4>Меню</h4>
					<ul class="scroll-to"> 
						<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
						<li><a href="<?php echo get_home_url(); ?>/#services">Услуги</a></li>
						<li><a href="<?php echo get_home_url(); ?>/#about">Об адвокате</a></li>
						<li><a href="blog.html">Блог</a></li>
					</ul>
				</nav>
			</div>

			<div class="footer__col">
				<h4>Контакты</h4>
				<a href="tel:<?php the_field('tel', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
				<p><?php the_field('position', 'option'); ?></p>
				<a href="meilto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
				<button class="btn feedback_open">Обратная связь</button>
			</div>

		</div>
	</footer>