<?php

namespace app\controllers;

use app\models\Audios;
use Yii;

class HomeController extends \yii\web\Controller {

    public function actionIndex() {
        $audio_limit = 5;
        $article_limit = 1;
        $quote_count = \app\models\Quotes::find()->count();

        $all_years_audios = Audios::find()->select('year(date) as date')->distinct()->all();        
        $all_years_articles = \app\models\Articles::find()->select('year(date) as date')->distinct()->all();
        
        $recent_audio_left = Audios::find()->limit($audio_limit)->orderBy(['date' => SORT_DESC])->where(['status' => 'show'])->all();
        $recent_audio_right = Audios::find()->limit($audio_limit)->offset($audio_limit)->orderBy(['date' => SORT_DESC])->where(['status' => 'show'])->all();

        $recent_article_left = \app\models\Articles::find()->limit($article_limit)->orderBy(['id' => SORT_DESC])->where(['status' => 'show'])->all();
        $recent_article_right = \app\models\Articles::find()->limit($article_limit)->offset($article_limit)->orderBy(['id' => SORT_DESC])->where(['status' => 'show'])->all();

        $quote = \app\models\Quotes::findOne($quote_count);
        Yii::$app->db->createCommand()->truncateTable('years')->execute();
        
        
        return $this->render('index', [
                    'recent_audio_left' => $recent_audio_left,
                    'recent_audio_right' => $recent_audio_right,
                    'recent_article_left' => $recent_article_left,
                    'recent_article_right' => $recent_article_right,
                    'quote' => $quote,
                    'all_years_audios' => $all_years_audios,
                    'all_years_articles' => $all_years_articles,
        ]);
    }
}
