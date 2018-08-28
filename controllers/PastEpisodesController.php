<?php

namespace app\controllers;

class PastEpisodesController extends \yii\web\Controller
{
    public function actionIndex($year)
    {
        $episodes = \app\models\Audios::find()->where(['year(date)' => $year])->orderBy(['date' => SORT_DESC])->all();
        
        return $this->render('index', ['episodes' => $episodes]);
    }

}
