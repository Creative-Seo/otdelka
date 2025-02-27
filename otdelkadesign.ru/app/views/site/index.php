<?php
$this->title = 'Otdelka design';
?>
	
<div id="fixed-main">
	<section id="trip-grid">
		<div class="container">
<h1 class="text-center h2">Ремонт квартиры «под ключ» во Владимире и Владимирской области</h1>
<p>
Ремонт квартиры «под ключ» является основным направлением компании «Отделка и Дизайн». 
За годы работы мы учли все нюансы, которые могут возникнуть при отделочных работах «под 
ключ», знаем что, как, в какой последовательности и по каким технологиям стоит делать, чтобы 
выполнить работу качественно,  в максимально короткие сроки  и удовлетворить все пожелания 
наших клиентов. Мы сокращаем время, которое уходит на проведение ремонта, за счет 
налаженного принципа работы и подкрепляем это гарантиями в Договоре.
</p><p>
Ремонт квартиры «под ключ» - это целый комплекс работ по благоустройству Вашего жилья,
включающий в себя:
</p><ul>
	<li>перепланировку;</li>
	<li>замену остекления;</li>
	<li>электроснабжение;</li>
	<li>разводку сантехники;</li>
	<li>черновую и чистовую отделку всех поверхностей;</li>
	<li>установку дверей и встроенной мебели.</li>
</ul><p>
Специализируясь именно на ремонте «под ключ», наша компания обладает всеми ресурсами и 
налаженными партнерскими программами, для того, чтобы наши клиенты могли получить 
<b>решение всех возникающих вопросов в одном месте и по максимально выгодным ценам</b>.
</p><p class="text-center h2">
Гарантируем качество по договору.
</p><p>
Мы работаем по всей территории Владимирской области. Рекомендации наших клиентов и 
наличие постоянных заказов свидетельствуют о высоком качестве выполняемых нами работ. 
Клиентоориентированность, лояльность и честность в отношениях с нашими заказчиками, мы 
считаем нашими основными преимуществами. Сотрудничая с каждым клиентом, мы всегда 
учитываем его пожелания и материальные возможности.
</p><p>
Мы гарантируем соблюдение всех вышеописанных принципов и персональный подход к 
каждому клиенту.
</p><ul>
	<li>Все свои обязательства мы фиксируем в договоре.</li>
	<li>Вы оплачиваете работу по факту выполнения, мы уверены в качестве и работаем без аванса.</li>
	<li>Мы составляем точную детальную смету, чтобы стоимость ремонта была прозрачна и понятна заказчику.</li>
	<li>Хотите видеть, как делается ваш ремонт? Мы обеспечиваем ежедневный онлайн-контроль через Web камеру на объекте.</li>
</ul><p>
 На нашем сайте вы найдете описание порядка и последовательности предоставления услуг, 
сможете ознакомиться с информацией о компании, прайс-листом на все виды работ, получить 
бесплатную онлайн-консультацию и вызвать бесплатного консультанта-замерщика к вам домой.
</p><p class="text-center h2">
Цена на ремонт «под ключ».
</p><p>
Мы знаем какие материалы и от каких производителей нужно использовать, а <b>налаженные 
контакты с поставщиками материалов</b> позволяют предлагать одни из самых низких цен.  К 
примеру, ремонтируя «под ключ» квартиру <b>на одной только разнице в стоимости отделочных 
материалов можно сэкономить десятки тысяч рублей</b>, и это не считая их доставки, вывоза 
мусора и непосредственно самих отделочных работ. 
</p><p>
Окончательную стоимость ремонта можно определить только после составления сметы. Вы 
можете вызвать нашего специалиста для консультации и первичной оценки стоимости ремонта и 
сроков, это <b>бесплатно</b> и Вас ни к чему не обязывает.
</p><a href="javascript:;">
ВЫЗВАТЬ СПЕЦИАЛИСТА ДЛЯ БЕСПЛАТНОЙ КОНСУЛЬТАЦИИ
</a><p class="text-center h2">
Сроки выполнения ремонта.
</p><p>
Более точные сроки отделки Вашей квартиры и отдельных этапов можно узнать у специалиста. 
Примерные сроки выполнения работ:
</p><ul>
	<li>Ремонт однокомнатной квартиры в новостройке займет не более 30 дней;</li>
	<li>Ремонт двухкомнатной квартиры займет не более 50 дней;</li>
	<li>Ремонт трехкомнатной квартиры займет не более 65 дней.</li>
</ul>
		</div>
	</section>

	<section id="hp-portfolio">
		<div class="container">
			<h2 class="text-center">Наши преимущества</h2>
			<div class="items grid">
<?php $priem=json_decode('[
["rabotapodogovoru","Работа по договору"],
["tochnayasmeta","Точная детальная смета"],
["oplatapofactu","Оплата по факту выполненных работ без аванса"],
["onlinecontrol","Ежедневный онлайн-контроль"],
["luchzhiemateriali","Лучшие материалы от партнеров со скидками"],
["sovremennietehnologii","Использование современных материалов и технологий"],
["kvalificirovanniemastera","Квалифицированные мастера"],
["rabotapodizaynproektu","Работа по дизайн проекту"],
["individualniypodhod","Индивидуальный подход к клиенту"],
["garantii","Гарантия на работы"]
]',true);
foreach ($priem as $key => $row) {
	if ($key%5==0){echo '<div class="clearfix visible-lg"></div>';}
?>
				<div class="portfolio-item">
					<img src="/images/<?php echo $row[0]?>.jpg" class="attachment-full wp-post-image" alt="<?php echo $row[1]?>">
					<p><?php echo $row[1]?></p>
				</div>
<?php } ?>
			</div>
		</div>
	</section>

	<section id="foto">
		<div class="container">
<div class="row">
			<h2 class="text-center">Наши работы</h2>
			<div class="items grid">
<?php $priem=json_decode('[
["rabotapodogovoru","Работа по договору"],
["tochnayasmeta","Точная детальная смета"],
["oplatapofactu","Оплата по факту выполненных работ без аванса"],
["onlinecontrol","Ежедневный онлайн-контроль"],
["luchzhiemateriali","Лучшие материалы от партнеров со скидками"],
["sovremennietehnologii","Использование современных материалов и технологий"],
["kvalificirovanniemastera","Квалифицированные мастера"],
["rabotapodizaynproektu","Работа по дизайн проекту"],
["individualniypodhod","Индивидуальный подход к клиенту"],
["garantii","Гарантия на работы"]
]',true);
foreach ($priem as $key => $row) {
	if ($key%5==0){echo '<div class="clearfix visible-lg"></div>';}
?>
				<div class="portfolio-item">
					<a class="fancybox" rel="group" href="/images/<?php echo $row[0]?>.jpg"><img src="/images/<?php echo $row[0]?>.jpg" class="attachment-full wp-post-image" alt="<?php echo $row[1]?>"></a>
				</div>
<?php } ?>
			</div>
		</div>
		</div>
	</section>

	<section id="otzovi">
		<div class="container">
			<h2 class="text-center">Отзывы наших клиентов</h2>
		</div>
	</section>

	<section id="testimonials">
		<div class="container">
			<h2 class="text-center">Как мы работаем?</h2>

<div id="testimonial-nav" class="tooltip-examples list-inline">
	<div class="container"><div class="row">
		<div class="col-lg-3 col-lg-offset-1 col-sm-6">
			<div class="row">
				<div class="col-xs-6"><div class="row">
					<div class="col-xs-9 tools">
						<div class="tools-fix"><p class="tools-item">Вы можете связаться с нами по телефону или оставить заявку на нашем сайте, заявки на сайте обрабатываются специалистами в течение дня</p></div>
						<img src="/assets/img/d/1.jpg" class="tools-img" alt="client">
						<p>Обращение клиента в компанию</p>
					</div>
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-chevron-right"></i>
					</div>
				</div></div>
				<div class="col-xs-6"><div class="row">
					<div class="col-xs-9 tools">
						<div class="tools-fix"><p class="tools-item">Наш специалист выезжает по Вашему адресу, бесплатно консультирует Вас, фиксирует все Ваши пожелания к будущему ремонту и делает замеры помещения</p></div>
						<img src="/assets/img/d/3.jpg" class="tools-img" alt="client">
						<p>Выезд специалиста</p>
					</div>
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-chevron-right"></i>
					</div>
				</div></div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6">
			<div class="row">
				<div class="col-xs-6"><div class="row">
						<div class="col-xs-9 tools">
							<div class="tools-fix"><p class="tools-item">На основе Ваших пожеланий и особенностей помещения мы составим точную, развернутую смету,которая после утверждения Вами остается неизменной до окончания всех работ</p></div>
							<img src="/assets/img/d/2.jpg" class="tools-img" alt="client">
							<p>Составление сметы</p>
						</div>
						<div class="col-xs-3">
							<i class="glyphicon glyphicon-chevron-right"></i>
						</div>
					</div>
				</div>
				<div class="col-xs-6"><div class="row">
					<div class="col-xs-9 tools">
						<div class="tools-fix"><p class="tools-item">По желанию клиента наши дизайнеры могут подготовить индивидуальный дизайн-проект любого уровня сложности</p></div>
						<img src="/assets/img/d/4.jpg" class="tools-img" alt="client"><p>Дизайн проект</p>
					</div>
					<div class="col-xs-3">
								<i class="glyphicon glyphicon-chevron-right"></i>
					</div>
				</div></div>
			</div>
		</div>
<div class="clearfix visible-sm visible-md"></div>
		<div class="col-lg-3 col-sm-6 col-lg-offset-0 col-sm-offset-2">
			<div class="row">
				<div class="col-xs-6"><div class="row">
					<div class="col-xs-9 tools">
						<div class="tools-fix"><p class="tools-item">После утверждения сметы и дизайн-проекта мы заключаем с Вами договор, который является гарантом добросовестного исполнения наших обязательств</p></div>
						<img src="/assets/img/d/5.jpg" class="tools-img" alt="client"><p>Подписание договора</p>
					</div>
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-chevron-right"></i>
					</div>
				</div></div>
				<div class="col-xs-6"><div class="row">
					<div class="col-xs-9 tools">
						<div class="tools-fix"><p class="tools-item">Наши мастера приступают к работе на объекте, строго соблюдая утвержденный график</p></div>
						<img src="/assets/img/d/6.jpg" class="tools-img" alt="client"><p>Строительно-отделочные работы</p>
					</div>
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-chevron-right"></i>
					</div>
				</div></div>
			</div>
		</div>
		<div class="col-lg-2 col-sm-4 col-xs-8 col-xs-offset-3 col-sm-offset-0">
			<div class="row">
				<div class="col-xs-9"><div class="row">
					<div class="col-xs-9 tools">
						<div class="tools-fix"><p class="tools-item">После завершения всех работ мы подготавливаем объект к сдаче, производим финишную уборку и передаем ключи клиенту</p></div>
						<img src="/assets/img/d/7.jpg" class="tools-img" alt="client"><p>Сдача объекта</p>
					</div>
				</div></div>
			</div>
		</div>
	</div></div>
</div>
	</section>

    <section id="hp-partners">
		<div class="container">
		<h2 class="text-center">Наши партнёры</h2>
		<div class="row">
<?php $priem=json_decode('[
["http://spektr-service33.ru/","p1","spektr-service33"],
["http://www.esnab.pro/","p2","esnab"],
["http://www.da-ds.ru/","p3","da-ds"],
["http://css-33.ru/","p4","css-33"],
["http://kwartet33.ru/","p5","kwartet33"],
["http://www.kupimebel33.ru/","p6","kupimebel33"],
["http://stroy-vld.ru/","p7","stroy-vld"],
["http://www.newstyle33.ru/","p8","newstyle33"]
]',true);
foreach ($priem as $key => $row) {
	if ($key%4==0){echo '<div class="clearfix visible-lg"></div>';}
?>
	            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="<?php echo $row[0]?>" target="_blank" rel="nofollow"><img src="/images/<?php echo $row[1]?>.jpg" class="partners-img" alt="<?php echo $row[2]?>"></a>
				</div>
<?php } ?>
            </div>
		</div>
	</section>
</div>
