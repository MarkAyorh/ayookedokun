<?php

namespace app\controllers;

use Yii;
use app\models\Audios;
use app\models\AudioSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class AudioController extends \yii\web\Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionListen($date) {
        //convert date from mysql format to desired format 'd-M-Y'
        $model = new \app\models\AudioComments();

        $get_audio = \app\models\Audios::find()->where(['date' => $date])->one();
        $audio_comments = \app\models\AudioComments::find()->where(['audio_id' => $date])->all();
        $audio_comments_count = \app\models\AudioComments::find()->where(['audio_id' => $date])->count();
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->db->createCommand()
                    ->insert('audio_comments', ['id' => NULL,
                        'audio_id' => $date,
                        'date' => $date,
                        'time' => $model->time,
                        'firstname' => ucfirst($model->firstname),
                        'surname' => ucfirst($model->surname),
                        'location_town' => ucfirst($model->location_town),
                        'location_country' => ucfirst($model->location_country),
                        'comment' => $model->comment,
                        'status' => $model->status])
                    ->execute();
            return $this->refresh();
        }
        return $this->render('listen', [
                    'get_audio' => $get_audio,
                    'audio_comments' => $audio_comments,
                    'audio_comments_count' => $audio_comments_count,
                    'model' => $model,
                    'date' => $date,
        ]);
    }

    public function actionUpload() {
        $model = new \app\models\AudioUpload();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            $request = Yii::$app->request;
            $date = $request->post('date');
            $exists = \app\models\AudioUpload::find()->where(['date' => $date])->exists();

            if ($model->validate()) {
                if ($model->file->baseName !== $date) {
                    return $this->render('audio_upload_fail_name');
                } elseif ($exists) {
                    return $this->render('audio_upload_fail_exists');
                }

                if ($model->file) {
                    $filePath = 'audios/' . $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($filePath);
                }

                Yii::$app->db->createCommand()->insert('audios', ['id' => NULL,
                    'date' => Yii::$app->formatter->asDate($date, 'yyyy-MM-dd'),
                    'short_note' => $model->short_note,
                    'status' => $model->status,
                ])->execute();

                return $this->render('audio_upload_success');
            }
        }

        return $this->render('audio_upload', ['model' => $model]);
    }

    public function actionIndex() {
        $searchModel = new AudioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Audios model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Audios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Audios();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Audios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Audios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Audios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Audios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Audios::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
