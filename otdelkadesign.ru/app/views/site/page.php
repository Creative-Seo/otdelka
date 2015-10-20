<?php
$this->title = $page->title;
?>
<section id="trips">

<div id="trip-view">
<div class="container">
	<div class="trip-left">
		<h2><?=$page->title?></h2>
		<div class="heading-sep"></div>
		<?=$page->text?>
	</div><!-- end .trip-left -->
	<div class="clear"></div>

</div>
</div>
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

