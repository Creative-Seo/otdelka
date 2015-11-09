<?php
$this->title = $page->title;
?>

<section class="trips">
<div class="trip-view">
	<div class="trips-fon"><img src="" alt="<?=$page->title?>" title="<?=$page->title?>"></div>
	<div class="container">
		<div class="trip-left">
			<p>Цена: <?=$page->price?></p>
			<p>Срок: <?=$page->price?></p>
			<p><?=$page->price?></p>
		</div>
		<h1 class="trips-h1"><?=$page->title?></h1>
		<div class="trip-right"></div>
	</div>
</div>
<div class="row block-center">
	<div class="col-xs-6"><a href="">Пример смет</a></div>
	<div class="col-xs-6"><a href="">Типовой договор</a></div>
<div class="trips-text"><div class="container">
		<?=$page->text?>
</div></div>
</section>
<? if($page->slug == 'partners') : ?>
    <section id="hp-partners">
		<div class="container">
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
					<img src="/images/<?php echo $row[1]?>.jpg" class="partners-img" alt="<?php echo $row[2]?>">
				</div>
<?php } ?>
            </div>
		</div>
	</section>
<? endif; ?>

