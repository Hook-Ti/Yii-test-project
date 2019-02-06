<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\TestForm;

class NewController extends Controller
{
    public $layout = 'hook';
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAbout()
    {
    	//$this->view->title('Обо мне');
    	/*echo '<pre>';
    	var_dump($this->view->title);die();*/
        return $this->render('about');
    }
    public function actionForms()
    {
    	$model = new TestForm();
    	return $this->render('forms',compact('model'));
    }
}