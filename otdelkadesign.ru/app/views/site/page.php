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
	<style>
	.owl-next {
		float: right;
		position: relative;
		top: -81px;
		left: 15px;
	}
	.owl-prev {
		position: relative;
		top: -52px;
		left: -15px;
		width: 25px;
	}
	</style>
	<div  style="background: #fff; padding-top: 25px;">
		<div class="owl-carousel_partners" style="width: 95%; margin: auto;">
			<a target="_blank" href="http://spektr-service33.ru/"><img src="/images/p1.jpg" style="float: left; padding: 10px; cursor: pointer"/></a>
            <a target="_blank" href="http://www.esnab.pro/"><img src="/images/p2.jpg" style="float: left; padding: 10px; cursor: pointer"/></a>
            <a target="_blank" href="http://www.da-ds.ru/"><img src="/images/p3.jpg" style="float: left; padding: 10px; cursor: pointer"/></a>
            <a target="_blank" href="http://css-33.ru/"><img src="/images/p4.jpg" style="float: left; padding: 10px; cursor: pointer"/></a>
            <a target="_blank" href="http://kwartet33.ru/"><img src="/images/p5.jpg" style="float: left; padding: 10px; cursor: pointer"/></a>
            <a target="_blank" href="http://www.kupimebel33.ru/"><img src="/images/p6.jpg" style="float: left; padding: 10px; cursor: pointer"/></a>
            <a target="_blank" href="http://stroy-vld.ru/"><img src="/images/p7.jpg" style="float: left; padding: 10px; cursor: pointer"/></a>
            <a target="_blank" href="http://www.newstyle33.ru/"><img src="/images/p8.jpg" style="float: left; padding: 10px; cursor: pointer"/></a>
		</div>
	</div>
<? endif; ?>

