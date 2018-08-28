<?php

namespace app\controllers;

use Yii;

class QuotesController extends \yii\web\Controller {

    public function actionIndex() {
        $model = new \app\models\Quotes();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->db->createCommand()->insert('quotes', ['id' => NULL,
                'quote' => $model->quote,
                'author' => $model->author,
            ])->execute();
            return $this->render('quote_upload_success');
        }
        return $this->render('index', ['model' => $model]);
    }

}
