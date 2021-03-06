
	<!-- modal -->
		<div class="modal" id="order">
			<form action="sendmail.php" class="form" method="post">

				<button class="close order_close" type="button">
					<span></span>
					<span></span>
				</button>

				<h3>Назначить встречу</h3>
				<p>Заполните форму обратной связи и наши менеджеры свяжутся с Вами в ближайшее время</p>
				<input type="hidden" name="subject" value="Узнать подробнее!">

				<div class="">
					<input type="text" name="name" placeholder="Имя" required>
				</div>
				<div class="">
					<input type="tel" name="phone" required placeholder="Телефон">
				</div>

				<div class="">
					<textarea cols="30" rows="10" name="textarea" placeholder="Сообщение"></textarea>
				</div>
				
				<div class="">
					<button type="submit" class="btn" name="submit">Отправить</button>
				</div>

			</form>
		</div>

		<div class="modal" id="thanks">
			<button class="close thanks_close" type="button">
				<span></span>
				<span></span>
			</button>
			<h3>Спасибо <br>за доверие!</h3>
			<p>Мы обязательно с вами свяжемся!</p>
		</div>

		<div class="modal" id="feedback">
			<form action="sendmail.php" class="form" method="post">

				<button class="close feedback_close" type="button">
					<span></span>
					<span></span>
				</button>

				<h3>Обратная связь</h3>
				<p>Заполните форму обратной связи и наши менеджеры свяжутся с Вами в ближайшее время</p>
				<input type="hidden" name="subject" value="Узнать подробнее!">

				<div class="">
					<input type="text" name="name" placeholder="Имя" required>
				</div>
				<div class="">
					<input type="tel" name="phone" required placeholder="Телефон">
				</div>

				<div class="">
					<textarea cols="30" rows="10" name="textarea" placeholder="Сообщение"></textarea>
				</div>
				
				<div class="">
					<button type="submit" class="btn" name="submit">Отправить</button>
				</div>

			</form>
		</div>
	<!-- modal end-->