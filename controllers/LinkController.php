<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use yii\models\Links;
class LinkController extends \yii\web\Controller
{
	public $layout = 'new';
	public function actionIndex()
	{
		$links = 'here';echo 'here';var_dump(Links::find()->asArray()->all());die();
		//$links = Links::find()->orderBy(['id'=>SORT_DESC]);
		return $this->render('index',compact('links'));
	}
}
