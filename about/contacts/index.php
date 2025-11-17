<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?>

	<p>
		<b>Телефон:</b> 8 (908) 555 55 55<br>
		<b>Адрес:</b> г. Улан-Удэ, ул. Примерная, д. 1
	</p>
    <div class="mb-2 embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item"
                width="100%"
                height="490"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                src="https://yandex.ru/map-widget/v1/?um=constructor%3Aexamplehash&source=constructor" >
        </iframe>
    </div>
    <div class="mb-4">
        <small>
            <a href="https://yandex.ru/maps/?ll=107.6167%2C51.8333&z=12" target="_blank" style="text-align:left">
                Просмотреть увеличенную карту
            </a>
        </small>
    </div>
	<h2>Задать вопрос</h2>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.feedback",
		"bootstrap_v4",
		Array(
			"EMAIL_TO" => "sale@nyuta.bx",
			"EVENT_MESSAGE_ID" => array(),
			"OK_TEXT" => "Спасибо, ваше сообщение принято.",
			"REQUIRED_FIELDS" => array("NAME"),
			"USE_CAPTCHA" => "Y"
		)
	);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>