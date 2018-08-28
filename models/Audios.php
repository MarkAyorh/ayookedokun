<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audios".
 *
 * @property int $id
 * @property string $date
 * @property string $short_note
 * @property string $status
 */
class Audios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'short_note', 'status'], 'required'],
            [['date'], 'safe'],
            [['short_note'], 'string', 'max' => 200],
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
            'short_note' => 'Short Note',
            'status' => 'Status',
        ];
    }
}
