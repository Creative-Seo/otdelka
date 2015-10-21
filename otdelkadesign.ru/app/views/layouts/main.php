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
	<link rel="stylesheet" href="/assets/css/jquery.fancybox.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- Include Stylesheets -->
	<style type="text/css" media="screen">@import url(/assets/css/aw.main.css);</style>
	<!-- Include Page Specific Stylesheets -->
	<link rel="stylesheet" href="/assets/css/aw.<?echo ($page->slug == 'index')?'home':'trips';?>.css" />

	<link rel="stylesheet" href="/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="/assets/css/owl.theme.css">
</head>
<body>

<?if($page->slug == 'index'):?>
<div class="home homepage">
<?else:?>
<div class="home">
<? endif; ?>
	<header class="cd-main-header">
		<a class="cd-logo" href="/"><span class="logo-up">otdelka</span><span class="logo-down">design</span></a>
		<ul class="cd-header-buttons">
			<li><a class="cd-nav-trigger" href="javascript:void(0);"><span></span></a></li>
		</ul>
	</header>
	<main class="cd-main-content"></main>
	<div class="cd-overlay"></div>
	<nav class="cd-nav">
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
			<li class="has-children">
				<a href="javascript:void(0);">Отделка</a>
				<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="javascript:void(0);">Назад</a></li>
					<li class="has-children">
						<a href="/remont-kvartir">Ремонт квартир</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="javascript:void(0);">Назад</a></li>
							<li><a href="/remont-kvartir-v-novostroyke">Ремонт квартир в новостройке</a></li>
							<li><a href="/kapitalnyy-remont-kvartir">Капитальный ремонт квартир</a></li>
							<li><a href="/kosmeticheskiy-remont-kvartir">Косметический ремонт квартир</a></li>
							<li><a href="/remont-v-trehkomnatnoy-kvartire">Ремонт в трехкомнатной квартире</a></li>
							<li><a href="/remont-v-dvuhkomnatnoy-kvartire">Ремонт в двухкомнатной квартире</a></li>
							<li><a href="/remont-v-odnokomnatnoy-kvartire">Ремонт в однокомнатной квартире</a></li>
							<li><a href="/remont-v-hrushchevke">Ремонт в хрущевке</a></li>
							<li><a href="/remont-v-panelnom-dome">Ремонт в панельном доме</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="/remont-komnat">Ремонт комнат</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="javascript:void(0);">Назад</a></li>
							<li><a href="/remont-vannoy">Ремонт ванной</a></li>
							<li><a href="/remont-kuhni">Ремонт кухни</a></li>
							<li><a href="/remont-balkona-i-lodzhii">Ремонт балкона и лоджии</a></li>
							<li><a href="/remont-tualeta">Ремонт туалета</a></li>
							<li><a href="/remont-spalni">Ремонт спальни</a></li>
							<li><a href="/remont-prihozhey">Ремонт прихожей</a></li>
							<li><a href="/remont-koridora">Ремонт коридора</a></li>
							<li><a href="/remont-detskoy-komnaty">Ремонт детской комнаты</a></li>
							<li><a href="/remont-gostinoy">Ремонт гостиной</a></li>
						</ul>
					</li>
					<li class="has-children">
						<a href="/otdelka-pomeshcheniy">Отделка помещений</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="javascript:void(0);">Назад</a></li>
							<li><a href="/otdelka-ofisov">Отделка офисов</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="has-children">
				<a href="javascript:void(0);">Дизайн</a>
				<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="javascript:void(0);">Назад</a></li>
					<li class="has-children">
						<a href="/dizayn-interera">Дизайн интерьера</a>
						<ul class="is-hidden">
							<li class="go-back"><a href="javascript:void(0);">Назад</a></li>
							<li><a href="/dizayn-kuhni">Дизайн кухни</a></li>
							<li><a href="/dizayn-kvartir">Дизайн квартир</a></li>
							<li><a href="/dizayn-spalni">Дизайн спальни</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="has-children">
				<a href="javascript:void(0);">Услуги</a>
				<ul class="cd-secondary-nav is-hidden">
					<li class="go-back"><a href="javascript:void(0);">Назад</a></li>
					<li><a href="/otdelochnye-raboty">Отделочные работы</a></li>
					<li><a href="/dekorativnaya-otdelka">Декоративная отделка</a></li>
				</ul>
			</li>
			<li><a href="/portfolio">Портфолио</a></li>
			<li><a href="/o-kompanii">О компании</a></li>
			<li><a href="/kontakty">Контакты</a></li>
			<li class="address">
				<span>Адрес: г.Владимир, ул. Пушкина, д.1</span><br>
				<span>post@otdelkadesign.ru</span><br>
				<span><img src="/images/trubka.png" style="width: 12px" alt="трубка"/>+7 930 835 55 35</span>
			</li>
		</ul>
	</nav>

<?if($page->slug == 'index'):?>
	<div id="hero" class="hero"></div>
	<div id="hero-text-hold" class="hero-text">
		<div>
			<p class="h2"><span class="hero-text-h2">Otdelka design</span> - это</p>
			<p>Отделочные работы с четкими гарантиями, прописанными в договоре.<br>Составление четкой детальной сметы не меняющаяся в процессе работ.<br>Оплата по факту выполнения работ без аванса.</p>
		</div>
		<div class="container"><div class="row hero-row">
			<div class="col-sm-3 col-md-2 col-md-offset-2"><img class="hero-icon" src="/images/home-icon/otdelochnye-raboty.png" alt="Отедлочные работы"><p>Отедлочные работы</p></div>
			<div class="col-sm-3 col-md-2"><img class="hero-icon" src="/images/home-icon/remont-ofisov.png" alt="Ремонт офисов"><p>Ремонт офисов</p></div>
			<div class="col-sm-3 col-md-2"><img class="hero-icon" src="/images/home-icon/remont-komnat.png" alt="Ремонт комнат"><p>Ремонт комнат</p></div>
			<div class="col-sm-3 col-md-2"><img class="hero-icon" src="/images/home-icon/dizayn-intererov.png" alt="Дизайн интерьеров"><p>Дизайн интерьеров</p></div>
		</div></div>
	</div>
<? endif; ?>
</div>

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
				</div>
			</div>
		</div>
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
				</div>
			</div>
		</div>

<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>

		<footer class="footer">
			<div class="container">
				<p class="h2"><a href="/" class="footer-nav">Otdelka design</a></p>
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<a href="/remont-kvartir" class="footer-nav">Ремонт квартир</a>
						<a href="/remont-komnat" class="footer-nav">Ремонт комнат</a>
						<a href="/otdelka-pomeshcheniy" class="footer-nav">Отделка помещений</a>
					</div>
					<div class="col-sm-4 col-md-3">
						<a href="/dizayn-interera" class="footer-nav">Дизайн интерьера</a>
						<a href="/otdelochnye-raboty" class="footer-nav">Отделочные работы</a>
						<a href="/dekorativnaya-otdelka" class="footer-nav">Декоративная отделка</a>
					</div>
					<div class="col-sm-4 col-md-6">
						<span>ООО "Отделка и Дизайн"</span><br>
						<span>600005, Владимирская обл., Владимир г., Горького ул., 56-А дом</span><br>
						<span>ОГРН: 1153328000814</span>
						<a href="tel:89308355535" class="footer-nav"><img src="/images/trubka.png" style="width: 16px" alt="трубка"/>+7 930 835 55 35</a>
					</div>
				</div>
				<p class="footer-down">
					<a href="/" target="_blank" class="round-3px social-btn trans-bg facebook"></a>
					<a href="/" class="round-3px social-btn trans-bg mail"></a>
				</p>
			</div>
		</footer>

	</div>
</div>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="/assets/js/lib/jquery.easing.min.js"></script>
	<script src="/assets/js/lib/waypoints.min.js"></script>
	<script src="/assets/js/lib/respond.min.js"></script>
	<script src="/assets/js/lib/modernizr-2.6.2.min.js"></script>
	<script src="/assets/js/lib/jquery.mobile.custom.min.js"></script>
	<script src="/assets/js/lib/bootstrap.min.js"></script>
	<script src="/assets/js/lib/jquery.fancybox.pack.js"></script>
	<script src="/assets/js/lib/main.js"></script>

	<!-- Include Scripts -->
	<script src="/assets/js/aw.Testimonials.js"></script>
	<script src="/assets/js/aw.Destinations.js"></script>
	<script src="/assets/js/aw.js"></script>

<script src="/assets/js/owl.carousel.js"></script>	

<script>
//site
$(window).load(function(){
    $("#element").popover({
        trigger: "manual",
        html: true,
        content: $('#regionPopContent').html()
    })
        .on("mouseenter", function () {
        var _this = this;
        $(this).popover("show");
        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide")
            }
        }, 100);
	});
});

$(function(){
	$(".fancybox").fancybox({
		openEffect: 'none',
		closeEffect: 'none',
		beforeShow : function() {
			var alt = this.element.find('img').attr('alt');
			if (alt) {this.inner.find('img').attr('alt', alt);this.title = alt;}
		}
	});

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
	});

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
	});
//site
	var i = 1;
	setInterval(function(){
		i++;
		if(i > 2) i = 1;
	
		$("#hero").animate({
			opacity: 0,
		},1000, function(){
			$("#hero").css("background","url('/assets/img/hero-slide"+i+".jpg') top center no-repeat");
			$("#hero").css("background-size","cover")
		});
		
		$("#hero").animate({
			opacity: 1,
		}, 1000);
	}, 15000);
	$(".tooltip-examples a").tooltip();
    $(".tooltip-examples button").tooltip();
});
</script>

</body>
</html>
<?php $this->endPage() ?>