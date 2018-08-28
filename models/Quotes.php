<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quotes".
 *
 * @property int $id
 * @property string $quote
 * @property string $author
 */
class Quotes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quotes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quote', 'author'], 'required'],
            [['quote'], 'string', 'max' => 280],
            [['author'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quote' => 'Quote',
            'author' => 'Author',
        ];
    }
}
