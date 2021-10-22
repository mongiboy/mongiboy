    <footer>
        <div class="wrapper">
            <div class="wrap">
                <div class="contacts">
                    <p>Глэмпинг отель "Берег Грифона"</p>
                    <p>Нижегородская область, Сокольский район, д. Кудрино</p>
                    <p>Координаты 57.219715, 43.211999</p>
                    <p><a href="tel:88003025709">8 800 302 57 09</a></p>
                    <p><a href="mailto:info@bereggrifona.ru">info@bereggrifona.ru</a></p>
                    <p>ИП Егоров А.В.</p>
                    <p>ИНН 525703165097</p>
                    <p>ОГРН 319527500122502</p>
                </div>
                <div class="social">
                    <p>Мы в социальных сетях:</p>
                    <div class="items">
                        <a target="_blank" href="https://www.instagram.com/bereggrifona/?igshid=16ifqezqbgeyi"><img src="image/ico/inst.svg" alt=""></a>
                        <a target="_blank" href="https://www.facebook.com/bereggrifona"><img src="image/ico/fb.svg" alt=""></a>
                        <a target="_blank" href="https://vk.com/public203957109"><img src="image/ico/vk.svg" alt=""></a>                       
                    </div>
                    <p>Мы в месседжерах:</p>
                    <div class="items">
                        <a target="_blank" href="https://tlgg.ru/@bereggrifona"><img src="image/ico/tg.svg" alt=""></a>
                        <a target="_blank" href="https://wa.me/79867424060"><img src="image/ico/wh.svg" alt=""></a>
                        <a target="_blank" href="https://viber.click/79867424060"><img src="image/ico/viber.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="rules">
                <span class="rule">Правила ▲</span>
                <ul class="subRules">
                    <?
                        foreach($pages as $key=>$value){
                            if($key != $url){
                                echo'<li><a href="' .$key .'">'.$value .'</a></li>';
                            }
                        }
                    ?>
                    <!-- <li><a href="/bookingrule.php">Политика конфиденциальности</a></li> -->
                </ul>
            </div>
            <p>© Берег Грифона <?echo date('Y')?></p>
        </div>
        <script src="scripts/jquery-3.6.0.min.js"></script>
        <script src="scripts/owlcarousel/owl.carousel.min.js"></script>
        <script src="scripts/scripts.js"></script>
    </footer>
</body>
</html>