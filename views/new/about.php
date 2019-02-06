<?php 

	$this->title = 'About';

	$this->registerJsFile('@web/js/myjs.js');
	$this->registerCssFile('@web/css/style.css',['depends'=>'yii\bootstrap\BootstrapAsset']);

	$script = "console.log('Hello world!!')";
	$this->registerJs($script,\yii\web\View::POS_LOAD);
?>
<?php
	$this->beginBlock('block1');
?>
<h2>This is new blog</h2>
<p>
	Here are some paragraph text
</p>
<?php $this->endBlock();?>
<h2>Page about</h2>