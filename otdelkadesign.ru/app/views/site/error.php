<?php
use yii\helpers\Html;
$this->title = $name;
?>

<section id="trips">

<div id="trip-view">
<div class="container">
	<div class="trip-left">
		<h2><?=Html::encode($this->title)?></h2>
		<div class="heading-sep"></div>
		<?=nl2br(Html::encode($message))?>
	</div><!-- end .trip-left -->
	<div class="clear"></div>
</div>
</div>

</section>