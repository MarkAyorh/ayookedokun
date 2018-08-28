<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $category
 * @property string $title
 * @property string $body
 */
class ArticleUpload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */    
    public $file;
    
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
            [['date', 'category', 'title', 'body'], 'required'],
            [['date'], 'safe'],
            [['body'], 'string'],
            [['category', 'picture'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 150],
            [['status'], 'string', 'max' => 4],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'title' => 'Title of Article',
            'body' => 'Body of Article',
            'status' => 'Status',
            'picture' => 'Name of Picture',
            'file' => 'Upload Picture',
        ];
    }
}
