<?php
use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);
$page = \Yii::$app->controller->page;
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <?php $this->head() ?>
	
		
		<link href="http://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,600,700,700italic" rel="stylesheet" type="text/css" />		
	
		<!-- Include Stylesheets -->
		<style type="text/css" media="screen">@import url(/assets/css/aw.main.css);</style>

		<!-- Include Page Specific Stylesheets -->
				<link rel="stylesheet" href="/assets/css/aw.<?echo ($page->slug == 'index')?'home':'trips';?>.css" />
				
		
		<!-- Include Libraries -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
		<script src="/assets/js/lib/jquery.easing.min.js"></script>
		<script src="/assets/js/lib/waypoints.min.js"></script>
		<script src="/assets/js/lib/respond.min.js"></script>
		<script src="/assets/js/lib/modernizr-2.6.2.min.js"></script>

		<!-- Include Scripts -->
				<script src="/assets/js/aw.Testimonials.js"></script>
				<script src="/assets/js/aw.Destinations.js"></script>
				<script src="/assets/js/aw.js"></script>
		<link rel="stylesheet" href="/assets/css/owl.carousel.css">

<!-- Тема по умолчанию -->
<link rel="stylesheet" href="/assets/css/owl.theme.css">

	<script src="/assets/js/owl.carousel.js"></script>	
		
    </head>
    <body>
	
	<div id="header-<?echo ($page->slug == 'index')?'viewport':'interior';?>" class="trans-margin">
		<div id="mobile-nav-hold">
		
			<div class="mobile-nav trans-right">

				<nav>

					<h3>Меню</h3>
					<a href="/">Главная</a>
					<a href="/kvartir">Ремонт квартир</a>
					<a href="/kottedj">Ремонт коттеджей</a>
					<a href="/office">Ремонт офисов</a>
					<a href="/design">Дизайн</a>
					<a href="/Ourworks">Наши работы</a>
					<a href="#" class="priem">Преимущества</a>
					<a href="#" class="dop_slash">Дополнительно</a>
					<a href="/cost">Стоимость</a>
					<br/>
					post@otdelkadesign.ru<br/><img src="/images/trubka.png" style="width: 16px" alt="трубка"/><span onclick="location.href='tel:89308355535'">+7 930 835 55 35</span>

				</nav>

			</div><!-- end .mobile-nav -->

		</div>
	
			<header>
			<?if($page->slug == 'index'):?>
								<div id="navigation-main">
					<div class="container">
						<div id="logo">
							<a href="/">
								Otdelka Design
							</a>
						</div>
						<nav>
							<ul>
								<li><a href="/design">Дизайн</a></li>
								<li>
									<a href="/technology">Технологии</a>
									
								</li>
								<li><a href="#" class="howwork">Как мы работаем</a></li>
								<li><a href="/partners">Партнеры</a></li>
								<li style="text-align: right;"><a>post@otdelkadesign.ru<br/><img src="/images/trubka.png" style="width: 16px" alt="трубка"/>+7 930 835 55 35</a></li>
							</ul>
						</nav>
						<div id="menu-btn"><a href="javascript:;"><span></span><span></span><span></span></a></div>
					</div><!-- end .container -->
				</div><!-- end #navigation-main -->
				
				 <div id="hero"></div><!-- end #hero -->
					<div id="hero-scrolldown">
						<a  href="javascript:;" class="viewmore-down"><span class="round-3px trans-bg">Заказать звонок</span></a>
						<!-- <a href="javascript:AW.scrollTo('#experience');"><img src="assets/img/btn-scrolldown.png" alt="scroll"/></a> -->
					</div>
					<div id="hero-text-hold">
						<div class="hero-text">
							<h2>
								Otdelka
								<span>design</span>
							</h2>
							<div class="heading-sep"></div>
						</div><!-- end .hero-text -->
					</div><!-- end #hero-text-hold -->
				<? endif; ?>
				<div id="navigation-category-hold">
					<div id="navigation-category">
						<div class="container">
							<nav>
								<ul>
									<li class="nopad-left"><a href="/" class="nopad-left homelink">Главная</a></li>
									<li id="more-categories"><a href="#">Виды ремонта</a>
										<ul class="subnav">
											<li><a href="/kvartir">Ремонт квартир</a></li>
											<li><a href="/kottedj">Ремонт коттеджей</a></li>
											<li><a href="/office">Ремонт офисов</a></li>
										</ul>
									</li>
									
									<li><a href="/#priem" class="priem">Преимущества</a></li>
									<li><a href="/Ourworks">Наши работы</a></li>
									<li id="more-categories"><a href="/#dop_slash" class="dop_slash">Дополнительно</a>
										<ul class="subnav">
											<li><a href="/natyazhnye-potolki">Натяжные потолки</a></li>
											<li><a href="/plastic">Пластиковые окна</a></li>
											<li><a href="/f3d">3D полы</a></li>
											<li><a href="/knauf">Полы KNAUF</a></li>
										</ul>
									</li>
									<li><a href="/cost">Стоимость</a></li>
									
								</ul>
							</nav>
							<div id="search-btn" style="text-align: right; width:auto">post@otdelkadesign.ru<br/><img src="/images/trubka.png" style="width: 16px" alt="трубка"/>+7 930 835 55 35</div>
						</div><!-- end .container -->
					</div><!-- end #navigation-category -->
				</div><!-- end #navigation-category-hold -->				
			</header><!-- end header -->
		</div><!-- end #header-viewport -->

		<div id="viewport" class="trans-margin ">
			<div id="viewport-slide" class="trans-margin">
			<div id="search">
				<div class="modal-overlay">
					<div class="modal-close"><a href="javascript:AW.toggleOpen('#search .modal-overlay', 'modal-open');"><img src="/assets/img/btn-close.svg" alt="close"/></a></div>
					<div class="modal-hold">
						<form action="/" method="get">
							<div id="search-hint">ПОИСК</div>
							<input type="text" value="Введите поисковую фразу" name="s" id="search-txt" class="round-3px" onclick="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
							<div id="search-sep"></div>
							<input type="submit" value="Искать" id="search-submit" class="round-3px"/>
						</form>
					</div><!-- end .modal-hold -->
				</div><!-- end .modal-overlay -->
			</div><!-- end #search -->
			
			
			<div id="formcall">
				<div class="modal-overlay">
					<div class="modal-close"><a href="javascript:AW.toggleOpen('#formcall .modal-overlay', 'modal-open');"><img src="/assets/img/btn-close.svg" alt="close"/></a></div>
					<div class="modal-hold">
						<form action="/site/submitform" method="post">
							<div id="search-hint">Обратный звонок</div>
							<input type="text" value="Ваше имя" name="name" id="search-txt" class="round-3px" onclick="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
							<input type="text" value="Телефон" name="phone" id="search-txt" class="round-3px" onclick="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
							<input type="hidden" name="_csrf" value="<?=\Yii::$app->request->getCsrfToken()?>" />
							<div id="search-sep"></div>
							<input type="submit" value="Отправить" id="search-submit" class="round-3px"/>
						</form>
					</div><!-- end .modal-hold -->
				</div><!-- end .modal-overlay -->
			</div><!-- end #search -->
	
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
	<footer>
					<div id="footer-copyright">
						<div class="container">
							<div id="footer-logo"></div>
							<div id="footer-copy">
								<h3>Copyright © OtdelkaDesign 2015</h3>
								<img src="/images/trubka.png" style="width: 16px" alt="трубка"/><a href="tel:89308355535">+7 930 835 55 35</a>
							</div><!-- end #footer-copy -->
						</div><!-- end .container -->
					</div><!-- end #footer-copyright -->
					<div id="footer-main">
						<div class="container">
							<div class="footer-col">
								<a href="/" class="footer-nav">Главная</a>
								<a href="/design" class="footer-nav">Дизайн</a>
								<a href="/technology" class="footer-nav">Технологии</a>
								<a href="#priem" class="priem footer-nav">Преимущества</a>
							</div><!-- end .footer-col -->
							<div class="footer-col footer-col-two">
								<a href="/o-kompanii" class="footer-nav">О компании</a>
							</div><!-- end .footer-col -->
							<div class="footer-col extended">
								<a href="/" target="_blank" class="round-3px social-btn trans-bg facebook"></a>
								<a href="/" class="round-3px social-btn trans-bg mail"></a><br/>
							</div><!-- end .footer-col -->
							<div class="clear"></div>
						</div><!-- end .container -->
					</div><!-- end #footer-main -->
				</footer><!-- end footer -->
		</div><!-- end #viewport-slide -->
		</div><!-- end #viewport -->
		
		<script>
		$(document).ready(function() {
$(function(){

var hash = window.location.hash.substr(1);  
if(hash) $('html,body').stop().animate({ scrollTop: $('a[name=priem]').offset().top - 100 }, 2000);

$('.priem').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('a[name=priem]').offset().top - 100 }, 1000);
  //e.preventDefault();
  return false;
});

$('.dop_slash').on('click', function(e){
  $('html,body').stop().animate({ scrollTop: $('a[name=dop_slash]').offset().top - 100 }, 1000);
  //e.preventDefault();
  return false;
});

$('.howwork').on('click', function(e){
    $('html,body').stop().animate({ scrollTop: $('a[name=howwork]').offset().top - 10 }, 1000);
    //e.preventDefault();
    return false;
});


});

 $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	autoplay: true,
	autoplayTimeout: 5000,
	smartSpeed: 1500,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

	$('.owl-carousel_partners').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	mouseDrag: false,
	touchDrag: false,
	pullDrag: false,
	autoplay: true,
	autoplayTimeout: 5000,
	smartSpeed: 1500,
	navText: ['<img src="/images/arrows2.png">','<img src="/images/arrows.png">'],
    responsive:{
        0:{
            items:1
        },
		400:{items: 2},
        700:{
            items:3
        },
		
        900:{
            items:4
        },
		
		1200 : {
			items: 6
		}
		
    }
	})
 
})
	</script>	
    </body>
    </html>
<?php $this->endPage() ?>