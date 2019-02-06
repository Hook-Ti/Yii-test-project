<?php 
use yii\helpers\Html;
?>
<div class="container">
<ul class="list-group">
	<li><?= Html::a('Главная',['/site/'],['class'=>'list-group-item'])?></li>
	<li><?= Html::a('About',['/site/about'],['class'=>'list-group-item'])?></li>
	<li><?= Html::a('Форма',['/site/form'],['class'=>'list-group-item'])?></li>
</ul>
</div>