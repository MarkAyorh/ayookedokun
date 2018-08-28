<?php

namespace app\controllers;

use Yii;
use \yii\helpers\Url;

class AdminController extends \yii\web\Controller {

    public function actionIndex() {
        if (Yii::$app->user->isGuest){
            return $this->redirect('login');
        }
            
        return $this->render('index');
    }

}
