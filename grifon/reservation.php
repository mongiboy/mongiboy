<? include "header.php" ?>
<main class="secondary" id="reservation">
    <div id="booking_iframe" style="padding-bottom: 32px;position: relative;">
        <div id="bn_iframe" style='position: absolute;right: 0;margin-top: 12px;font-family: "Proxima nova", "Helvetica Neue", "Cera Pro Medium", Arial, Helvetica, sans-serif;font-size: 12px;line-height: 1em;opacity: 0.5;z-index: 3;bottom:0;'>
        </div>
    </div>
    <script src="https://widget.reservationsteps.ru/iframe/library/dist/booking_iframe.js"></script>
    <script type="text/javascript">
    var BookingIframe = new BookingIframe({
        html_id: 'booking_iframe',
        uid: 'e04fa72f-4546-4921-ac06-9b97b0adafde',
        lang: 'ru',
        width: 'auto',
        height: '1200px',
        rooms: '',
        scroll_to_rooms: '1'
    })
    BookingIframe.init()
    </script>
</main>
<? include "footer.php" ?>