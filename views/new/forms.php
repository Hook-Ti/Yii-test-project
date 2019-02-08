<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Test Form</h1>
<div class="container">
	<div class="row">
		<div class=" col-md-6 offset-md-1">
			
<?php 

//use app\components\MyWidget;
/**
* My own widget
*/

app\components\MyWidget::begin();?>
<h1>Here is some text</h1>
<?php app\components\MyWidget::end();

$form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']])?>
<?= $form->field($model,'name')->label('Имя'); ?>
<?= $form->field($model,'email')->label('Email')->input('email'); ?>
<?= $form->field($model,'password')->label('Пароль')->passwordInput(); ?>

<?= yii\jui\DatePicker::widget(['name'=>'attributeName']); ?> //Datepicker

<?= $form->field($model,'text')->label('Текст сообщения')->textarea(['rows'=>5]); ?>
<?= Html::activeCheckbox($model,'remember',[]);?>
<?= Html::submitButton('Отправить',['class'=>'btn btn-success']);?>
<?php ActiveForm::end(); ?>

		</div>
	</div>
</div>