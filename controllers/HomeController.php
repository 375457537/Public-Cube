<?php

namespace app\controllers;

class HomeController extends \yii\web\Controller{
	public $layout = 'common';
	public function actionIndex(){
		return $this->render('index');
	}

}
