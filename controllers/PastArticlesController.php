<?php

namespace app\controllers;

class PastArticlesController extends \yii\web\Controller
{
    public function actionIndex($year)
    {
        $articles = \app\models\Articles::find()->where(['year(date)' => $year])->orderBy(['date' => 'ASC'])->all();
        
        return $this->render('index', ['articles' => $articles]);
    }

}
