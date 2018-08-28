<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $date
 * @property string $category
 * @property string $title
 * @property string $body
 * @property string $status
 * @property string $picture
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'category', 'title', 'body', 'status', 'picture'], 'required'],
            [['date'], 'safe'],
            [['body'], 'string'],
            [['category', 'picture'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 150],
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
            'date' => 'Date',
            'category' => 'Category',
            'title' => 'Title',
            'body' => 'Body',
            'status' => 'Status',
            'picture' => 'Picture',
        ];
    }
}
