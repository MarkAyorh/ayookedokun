<?php

namespace app\controllers;

use Yii;
use yii\web\UploadedFile;

class ArticleController extends \yii\web\Controller
{
    public function actionArticleUpload()
    {
        $model = new \app\models\ArticleUpload();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');            
            $exists = \app\models\ArticleUpload::find()->where(['title' => $model->title])->exists();

            if ($model->validate()) {
                if ($exists) {
                    return $this->render('article_upload_fail_exists');
                }

                if ($model->file) {
                    $filePath = 'articles/' . $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($filePath);
                }

                Yii::$app->db->createCommand()->insert('articles', ['id' => NULL,
                    'date' => $model->date,
                    'category' => $model->category,
                    'title' => $model->title,
                    'body' => $model->body,
                    'status' => $model->status,
                    'picture' => $model->picture,
                ])->execute();

                return $this->render('article_upload_success');
            }
        }
        return $this->render('article_upload', ['model' => $model]);
    }
    
    public function actionRead($id){
        //convert date from mysql format to desired format 'd-M-Y'
        $model = new \app\models\ArticleComments();
        
       $get_article = \app\models\Articles::find()->where(['id' => $id])->one();
       $article_comments = \app\models\ArticleComments::find()->where(['article_id' => $id])->all();
       $article_comments_count = \app\models\ArticleComments::find()->where(['article_id' => $id])->count();
       
       if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->db->createCommand()
                    ->insert('article_comments', ['id' => NULL, 
                        'article_id' => $model->article_id,
                        'date' => $model->date, 
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

        return $this->render('read', [
                    'get_article' => $get_article,
                    'article_comments' => $article_comments,
                    'article_comments_count' => $article_comments_count,
                    'model' => $model,
                    'id' => $id,
        ]);
    }
}
