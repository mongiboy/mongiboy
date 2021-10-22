<? require 'header.php';?>
	<!-- Cover -->
	<div id="coverbg" class="font">
		<p class="coverTitle font">Перевозка лежачих больных</p>
		<p class="coverDesc font">По Москве, области и всей России</p>
		<p class="coverDesc font">
		<?
				$time = date("H");
				if ($time > 20) {
					echo "КРУГЛОСУТОЧНО!";
				}
				else {
					echo "От кровати до кровати";
				}

				$year = date("Y") - 2015;
		?>
		</p>
		<p class="findСheap font">Найдёте дешевле - вернём разницу!</p>
		<p class="btn"><a href="#dark" class="font">Оставить заявку</a></p>
	</div>
	<!-- End Cover -->
	<!-- About -->
	<div id="about">
		<div class="wrapper">
			<h1 class="font red">Перевозка больных с <b class="font red">ФениксМедТранс</b></h1>
			<p>
				Мы специализируемся на перевозке больных уже более <? echo $year; ?> лет. Любая, даже технически сложная перевозка, осуществляемая службой «ФениксМедТранс», происходит по минимальным ценам в столице.</p>
			<p>
				Наши сотрудники прошли специальную подготовку на базе УМЦ при ЦКБ РЖД и получили соответствующие сертификаты, подтверждающие их квалификацию. Мы всегда внимательны и толерантны и проявляем понимание и сострадание к пациентам и родственникам, выполняя перевозку максимально удобно и безболезненно.
			</p>
			<p>
				Заказывая машину, Вы получаете комфортный специализированный автомобиль, оборудованный всем необходимым для перевозки и переноски лежачих больных: тележка-каталка с доп. амортизатором, мягкие носилки, специальные кресельные носилки.
			</p>
			<p>
				Услуга охватывает широкую географию. Можно заказать транспортировку пациентов в пределах Москвы и области, а также воспользоваться услугой перевозки больных по всей России.
			</p>
		</div>
	</div>
	<!-- End About -->
	<!-- Services -->
	<div id="services">
		<div class="wrapper">
			<h2 class="font red">Наши услуги</h2>
			<div class="flex">
				<div class="serviceCard">
					<img src="images/moscow.jpg" alt="">
					<p class="cardTitle font">
						По Москве
					</p>
					<p class="cardBody">
						Перевозка больного в пределах МКАД
					</p>
					<p class="cardPrice font">
						3000 ₽
					</p>
					<a href="#dark"><p class="cardBtn font">Заказать</p></a>
				</div>

				<div class="serviceCard">
					<img src="images/station.jpg" alt="">
					<p class="cardTitle font">
						Вокзал
					</p>
					<p class="cardBody">
						Перевозка больного на вокзал с посадкой в вагон
					</p>
					<p class="cardPrice font">
						4000 ₽
					</p>
					<a href="#dark"><p class="cardBtn font">Заказать</p></a>
				</div>

				<div class="serviceCard">
					<img src="images/aero.jpg" alt="">
					<p class="cardTitle font">
						Аэропорт
					</p>
					<p class="cardBody">
						Перевозка больного в Аэропорт (Шереметьево 1, Шереметьево 2, Внуково, Домодедово, Быково)
					</p>
					<p class="cardPrice font">
						5000 ₽
					</p>
					<a href="#dark"><p class="cardBtn font">Заказать</p></a>
				</div>

				<div class="serviceCard">
					<img src="images/tuda.jpg" alt="">
					<p class="cardTitle font">
						Туда и обратно
					</p>
					<p class="cardBody">
						Перевозка больных туда и обратно в пределах МКАД (30мин ожидания включены)
					</p>
					<p class="cardPrice font">
						4500 ₽
					</p>
					<a href="#dark"><p class="cardBtn font">Заказать</p></a>
				</div>
			</div>
			<p class="findСheap font">Найдёте дешевле - вернём разницу!</p>
			<div class="dopPrice">
				<div class="priceString">
					<p class="service">
						Перевозка больных за МКАД доплата к базовой стоимости
					</p>
					<p class="price">
						50 ₽/км
					</p>
				</div>
				<div class="priceString">
					<p class="service">
						Ожидание пациента свыше 30мин за каждые полчаса
					</p>
					<p class="price">
						500 ₽
					</p>
				</div>
				<div class="priceString">
					<p class="service">
						Спуск/подъём пациента по этажам при весе до 100 кг
					</p>
					<p class="price">
						200 ₽
					</p>
				</div>
				<div class="priceString">
					<p class="service">
						от 100 кг
					</p>
					<p class="price">
						300 ₽
					</p>
				</div>
				<div class="snoska">
					<p>*Cтоимость перевозки больных с весом свыше <b>140 кг</b> обсуждается индивидуально</p>
					<p>*При выполнении заказа <b>с 22.00 до 6.00</b> взимается доплата в размере <b>30%</b> от стоимости заказа</p>
					<p>*Ветеранам ВОВ предоставляется<b> скидка 250 ₽</b> на все услуги</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services -->
	<!-- How Work -->
	<div id="howWork">
		<div class="wrapper">
			<h2 class="font red">Как мы работаем</h2>
			<div class="steeps flex">
				<img src="images/phone.png" alt="">
				<div class="steepsDesc">
					<p class="font">Шаг 1:<p>
					<p>Оставьте заявку на сайте и ожидайте звонка оператора, оператор позвонит вам в течении 15 минут или позвоните по указанным телефонам.</p>
				</div>
			</div>
			<img class="arrow" src="images/arrow.png" alt="">
			<div class="steeps flex">
				<img src="images/list.png" alt="">
				<div class="steepsDesc">
					<p class="font">Шаг 2:<p>
					<p>Сообщите оператору о причине вызова, не скрывая истинного состояния больного. Согласуйте дату и время, место и стоимость заявки.</p>
				</div>
			</div>
			<img class="arrow" src="images/arrow.png" alt="">
			<div class="steeps flex">
				<img src="images/skor.png" alt="">
				<div class="steepsDesc">
					<p class="font">Шаг 3:<p>
					<p>Прибывшая бригада организует грамотную и безопасную транспортировку пациентов до оснащенного автомобиля с последующей перевозкой до места назначения.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End How Work -->
	<!-- Advantage -->
	<div id="advantage">
		<div class="wrapper">
			<h2 class="font red">Почему именно мы?</h2>
			<div class="flex">
				<div class="priceCard">
					<img src="images/soft.png" alt="">
					<p class="cardTitle font">
						Комфорт
					</p>
					<p class="cardBody">
						Во всех автомобилях есть одеяла, подушки, одноразовые простыни и многое другое для Вашего комфорта
					</p>
				</div>
				<div class="priceCard">
					<img src="images/time.png" alt="">
					<p class="cardTitle font">
						Пунктуальность
					</p>
					<p class="cardBody">
						Мы ценим Ваше время, поэтому машина всегда подаётся в оговоренное время
					</p>
				</div>
				<div class="priceCard">
					<img src="images/klass.png" alt="">
					<p class="cardTitle font">
						Профессионализм
					</p>
					<p class="cardBody">
						Наши сотрудники имеют большой опыт работы и прошли обучение по специальности "Санитар"
					</p>
				</div>
				<div class="priceCard">
					<img src="images/ruble.png" alt="">
					<p class="cardTitle font">
						Точная цена
					</p>
					<p class="cardBody">
						Оператор озвучивает окончательную стоимость, без скрытых доплат
					</p>
				</div>
			</div>
			<!-- <p class="advBtn"><a href="#dark" class="font">Оставить заявку</a></p> -->
		</div>
	</div>
	<!--End Advantage -->
	<!-- Reviews -->
		<div id="reviews" class="wrapper">
			<h2 class="font red">Отзывы о нас</h2>
			<div class="flex">
				<img src="images/rev1.jpg" alt="Отзыв">
				<img src="images/rev2.jpg" alt="Отзыв">
			</div>
			<div class="flex">
				<img src="images/rev4.jpg" alt="Отзыв">
				<img src="images/rev3.jpg" alt="Отзыв">
			</div>
			<p class="linkYaUslugi"><a target="_blank" href="https://yandex.ru/uslugi/profile/Feniksmedtrans-220615">Больше отзывов на Яндекс.Услугах</a></p>
		</div>
	<!-- End Reviews -->
	<? require 'footer.php';?>