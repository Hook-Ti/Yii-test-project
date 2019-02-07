<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Test Form</h1>
<div class="container">
	<div class="row">
		<div class=" col-md-6 offset-md-1">
			
<?php 
$form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']])?>
<?= $form->field($model,'name')->label('Имя'); ?>
<?= $form->field($model,'email')->label('Email')->input('email'); ?>
<?= $form->field($model,'password')->label('Пароль')->passwordInput(); ?>
<?= $form->field($model,'text')->label('Текст сообщения')->textarea(['rows'=>5]); ?>
<?= Html::activeCheckbox($model,'remember',[]);?>
<?= Html::submitButton('Отправить',['class'=>'btn btn-success']);?>
<?php ActiveForm::end(); ?>

		</div>
	</div>
</div>