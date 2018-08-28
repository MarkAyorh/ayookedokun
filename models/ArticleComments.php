<?php

namespace app\models;

/**
 * This is the model class for table "article_comments".
 *
 * @property int $id
 * @property int $article_id
 * @property string $date
 * @property string $firstname
 * @property string $surname
 * @property string $email
 * @property string $location
 * @property string $comment
 * @property string $status
 */
class ArticleComments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article_comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['article_id', 'date', 'firstname', 'surname', 'location_town', 'location_country', 'comment', 'status'], 'required'],
            [['article_id'], 'integer'],
            [['comment'], 'string'],
            [['date'], 'string', 'max' => 25],
            [['time'], 'string', 'max' => 12],
            [['firstname', 'surname', 'location_town', 'location_country'], 'string', 'max' => 15],
            [['status'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'date' => 'Date',
            'firstname' => 'Firstname',
            'surname' => 'Surname',
            'location_town' => 'City',
            'location_country' => 'Country',
            'comment' => 'Comment',
            'status' => 'Status',
        ];
    }
}
