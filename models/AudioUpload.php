<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audios".
 *
 * @property int $id
 * @property string $date
 * @property string $short_note
 */
class AudioUpload extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public $file;

    public static function tableName() {
        return 'audios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['short_note'], 'required'],
            [['date'], 'string', 'max' => 11],
            [['short_note'], 'string', 'max' => 200],
            [['status'], 'string', 'max' => 4],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'mp3'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'short_note' => 'Short Note',
            'status' => 'Status',
            'file' => 'Upload Audio',
        ];
    }

}
