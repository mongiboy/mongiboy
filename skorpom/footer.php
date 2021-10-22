<footer>
		<div class="wrapper flex">
			<div class="contacts">
				<p class="font">Наши контакты:</p>
				<p id="fooCompany">ФениксМедТранс</p>
				<p id="fooDesc">Служба перевозки больных</p>

				<div id="fooAddress" class="flex margTop">
					<img src="images/point.png" alt="">
					<p><a target="_blank" href="https://yandex.ru/maps/?um=constructor%3A4af8809d0d6eb689adc1f40ee4d46171999bbc90e845111f713af755c8b70422&source=constructorLink">Москва, Каргопольская ул., д. 10</a></p>
				</div>
				
				<div id="fooPhone" class="flex margTop">
					<img src="images/foo-phone.png" alt="">
					<p><a href="tel:84952268303">8 (495) 226-83-03</a></p>
				</div>
				<div id="fooMobail" class="flex margTop">
					<img src="images/mobile.png" alt="">
					<p><a href="tel:89161099390">8 (916) 109-93-90</a></p>
				</div>

				<div id="fooMail" class="flex margTop">
					<img src="images/mail.png" alt="">
					<p><a href="mailto:fenixmedtrans@gmail.com">fenixmedtrans@gmail.com</a></p>
				</div>
				
				<div id="fooTime" class="flex margTop">
					<img src="images/24.png" alt="">
					<p>Круглосуточно</p>
				</div>

				<div class="soc">
					<a href="https://vk.com/fenixmedtrans" target="_blank"><img src="images/vk.svg" alt="vk"></a>
					<a href="https://www.instagram.com/fenixmedtrans/" target="_blank"><img src="images/inst.svg" alt="inst"></a>
					<a href="https://youtube.com/channel/UCf9kk4joQhnhTjpfkpYpPhg" target="_blank"><img src="images/yt.svg" alt="yt"></a>
				</div>
			</div>
			<div class="form">
				<p class="font">Закажите машину</p>
				<form action="send.php" method="post" id="form2">
					<input type="hidden" name="url" value="55">
					<input class="fooField" type="text" name="name" id="name2" placeholder="Ваше имя" required>
					<input class="fooField" type="tel" name="phone2" id="phone2" placeholder="Номер телефона" required>
					<script>
						window.addEventListener("DOMContentLoaded", function() {
						function setCursorPosition(pos, elem) {
						    elem.focus();
						    if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
						    else if (elem.createTextRange) {
						        var range = elem.createTextRange();
						        range.collapse(true);
						        range.moveEnd("character", pos);
						        range.moveStart("character", pos);
						        range.select()
						    }
						}

						function mask(event) {
						    var matrix = "+7 (___) ___ ____",
						        i = 0,
						        def = matrix.replace(/\D/g, ""),
						        val = this.value.replace(/\D/g, "");
						    if (def.length >= val.length) val = def;
						    this.value = matrix.replace(/./g, function(a) {
						        return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
						    });
						    if (event.type == "blur") {
						        if (this.value.length == 2) this.value = ""
						    } else setCursorPosition(this.value.length, this)
						};
						    var input = document.querySelector("#phone2");
						    input.addEventListener("input", mask, false);
						    input.addEventListener("focus", mask, false);
						    input.addEventListener("blur", mask, false);
						});
					</script>
					<input class="fooBtn font red" type="submit" value="Заказать">
					<p class="politika">Отправляя свои данные Вы соглашаетесь на <a target="_blank" href="obrabotka.php">обработку персональных данных</a> и с <a target="_blank" href="politika.php">политикой конфиденциальности</a></p>
				</form>
			</div>
		</div>
	</footer>
	<!-- Modal Form -->
	<div id="dark">
		<div id="modalForm">
			<a href="#closed" class="close"><img src="images/close.png" alt="close"></a>
			<form action="send.php" method="post" id="form1">
				<p class="font">Закажите машину</p>
				<input type="hidden" name="url" value="55">
				<input class="fooField" type="text" name="name" id="name" placeholder="Ваше имя" required>
				<input class="fooField" type="tel" name="phone" id="phone" placeholder="Номер телефона" required>
				<script>
					window.addEventListener("DOMContentLoaded", function() {
					function setCursorPosition(pos, elem) {
					    elem.focus();
					    if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
					    else if (elem.createTextRange) {
					        var range = elem.createTextRange();
					        range.collapse(true);
					        range.moveEnd("character", pos);
					        range.moveStart("character", pos);
					        range.select()
					    }
					}

					function mask(event) {
					    var matrix = "+7 (___) ___ ____",
					        i = 0,
					        def = matrix.replace(/\D/g, ""),
					        val = this.value.replace(/\D/g, "");
					    if (def.length >= val.length) val = def;
					    this.value = matrix.replace(/./g, function(a) {
					        return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
					    });
					    if (event.type == "blur") {
					        if (this.value.length == 2) this.value = ""
					    } else setCursorPosition(this.value.length, this)
					};
					    var input = document.querySelector("#phone");
					    input.addEventListener("input", mask, false);
					    input.addEventListener("focus", mask, false);
					    input.addEventListener("blur", mask, false);
					});
				</script>
				<input class="fooBtn font red" type="submit" value="Заказать">
				<p class="politika">Отправляя свои данные Вы соглашаетесь на <a target="_blank" href="obrabotka.php">обработку персональных данных</a> и с <a target="_blank" href="politika.php">политикой конфиденциальности</a></p>
			</form>
		</div>
	</div>
	<!-- End Modal Form -->
</body>
</html>